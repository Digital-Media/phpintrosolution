$this->result = $_POST;
$this->currentView->setParameter(new GenericParameter("result", $this->result));
$this->currentView->setParameter(new PostParameter(Contact::SUBJECT, true));
$this->currentView->setParameter(new PostParameter(Contact::REQUEST, true));
$this->currentView->setParameter(new PostParameter(Contact::EMAIL, true));
$this->currentView->setParameter(new PostParameter(Contact::PRIORITY, true));