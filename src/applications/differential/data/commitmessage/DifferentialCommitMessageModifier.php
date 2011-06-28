<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

abstract class DifferentialCommitMessageModifier {
  protected $revision;

  /**
  * @param  DifferentialRevision The revision to generate fields for
  */
  public function __construct(DifferentialRevision $revision) {
    $this->revision = $revision;
  }

  /**
   * Implementation of this function should remove, modify, or append
   * fields to the $fields representing the fields for the given
   * $revision.  It should return the modified dict.  These fields are
   * included in the commit message generated by 'arc amend'.
   *
   * @param  array                The array of fields to modify
   * @return array                The updated array of fields
   */
  abstract public function modifyFields(array $fields);
}
