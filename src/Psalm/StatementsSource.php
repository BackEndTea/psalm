<?php

namespace Psalm;

interface StatementsSource
{
    /**
     * @return string
     */
    public function getNamespace();

    /**
     * @return array<string>
     */
    public function getAliasedClasses();

    /**
     * @return string
     */
    public function getAbsoluteClass();

    public function getClassName();

    public function getClassLikeChecker();

    /**
     * @return string|null
     */
    public function getParentClass();

    /**
     * @return string
     */
    public function getFileName();

    /**
     * @return string|null
     */
    public function getIncludeFileName();

    /**
     * @return string
     */
    public function getCheckedFileName();

    /**
     * @param string|null $file_name
     */
    public function setIncludeFileName($file_name);

    /**
     * @return bool
     */
    public function isStatic();

    /**
     * @return StatementsSource|null
     */
    public function getSource();

    /**
     * Get a list of suppressed issues
     * @return array<string>
     */
    public function getSuppressedIssues();
}
