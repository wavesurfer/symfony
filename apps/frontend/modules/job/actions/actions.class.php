// apps/frontend/modules/job/actions/actions.class.php
public function executeNew(sfWebRequest $request)
{
  $this->form = new JobeetJobForm();
}
 
public function executeCreate(sfWebRequest $request)
{
  $this->form = new JobeetJobForm();
  $this->processForm($request, $this->form);
  $this->setTemplate('new');
}
 
public function executeEdit(sfWebRequest $request)
{
  $this->form = new JobeetJobForm($this->getRoute()->getObject());
}
 
public function executeUpdate(sfWebRequest $request)
{
  $this->form = new JobeetJobForm($this->getRoute()->getObject());
  $this->processForm($request, $this->form);
  $this->setTemplate('edit');
}
 
public function executeDelete(sfWebRequest $request)
{
  $request->checkCSRFProtection();
 
  $job = $this->getRoute()->getObject();
  $job->delete();
 
  $this->redirect('job/index');
}
 
protected function processForm(sfWebRequest $request, sfForm $form)
{
  $form->bind(
    $request->getParameter($form->getName()),
    $request->getFiles($form->getName())
  );
 
  if ($form->isValid())
  {
    $job = $form->save();
 
    $this->redirect('job_show', $job);
  }
}