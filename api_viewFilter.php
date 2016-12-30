<?php
namespace Lib\Intacctws;

/**
 * Copyright (c) 2013, Intacct OpenSource Initiative
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
 * following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following
 * disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT,
 * STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN
 * IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * OVERVIEW
 * The general pattern for using this SDK is to first create an instance of api_session and call either
 * connectCredentials or connectSessionId to start an active session with the Intacct Web Services gateway.
 * You will then pass the api_session as an argument in the api_post class methods.  intacctws-php handles all
 * XML serialization and de-serialization and HTTPS transport.
 */

/**
 * Class api_viewFilter
 * Structure for passing view filters to the readView method
 */
class api_viewFilter {
    public $field;
    public $operator;
    public $value;
    
    /**
     * Create a view filter.  Combine multiple filters together in a api_viewFilters object
     * @param String $field filter to filter against
     * @param String $operator One of the valid operators for filtering.  Changes based on the
     * field type.  Refer to the edit view page in any record to see a list of valid operators
     * @param String $value The value to apply to the filter
     */ 
    function __construct($field, $operator, $value) {
        $this->field = $field;
        $this->operator = $operator;
        $this->value = HTMLSpecialChars($value);
    }
}
