<?php

abstract class ConduitAPI_feed_Method extends ConduitAPIMethod {

  public function getApplication() {
    return PhabricatorApplication::getByClass('PhabricatorFeedApplication');
  }

}
