<?php

abstract class ConduitAPI_chatlog_Method extends ConduitAPIMethod {

  public function getApplication() {
    return PhabricatorApplication::getByClass('PhabricatorChatLogApplication');
  }

}
