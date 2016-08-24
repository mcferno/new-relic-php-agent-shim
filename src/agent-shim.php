<?php
/**
 * Shim for when NewRelic's PHP agent it isn't present in the current environment.
 * Prevents the need for function existence checks throughout your codebase.
 *
 * All functions will return the "success" case, but are no-ops.
 * https://docs.newrelic.com/docs/agents/php-agent/configuration/php-agent-api
 *
 * @version 2016-08
 * @author Patrick McFern
 */

if (!function_exists('newrelic_add_custom_parameter')) {

    /**
     * Add a custom parameter to the current web transaction with the specified value.
     *
     * @param string $key
     * @param mixed $value
     * @return boolean
     */
    function newrelic_add_custom_parameter($key, $value)
    {
        return true;
    }
}

if (!function_exists('newrelic_add_custom_tracer')) {

    /**
     * API equivalent of the newrelic.transaction_tracer.custom setting.
     *
     * @param string $function_name
     * @return boolean
     */
    function newrelic_add_custom_tracer($function_name)
    {
        return true;
    }
}

if (!function_exists('newrelic_background_job')) {

    /**
     * If the flag argument is set to true or omitted, the current transaction is marked as a background job.
     *
     * @param boolean $flag
     * @return null
     */
    function newrelic_background_job($flag)
    {
        return null;
    }
}

if (!function_exists('newrelic_capture_params')) {

    /**
     * If enable is omitted or set to true, this enables the capturing of URL parameters for displaying in transaction traces.
     *
     * @param boolean $enable
     * @return null
     */
    function newrelic_capture_params($enable)
    {
        return null;
    }
}

if (!function_exists('newrelic_custom_metric')) {

    /**
     * Adds a custom metric with the specified name and value, which is of type double.
     *
     * @param string $metric_name
     * @param float $value
     * @return boolean
     */
    function newrelic_custom_metric($metric_name, $value)
    {
        return true;
    }
}

if (!function_exists('newrelic_disable_autorum')) {

    /**
     * Prevents the output filter from attempting to insert the JavaScript for page load timing for this current transaction.
     *
     * @return boolean
     */
    function newrelic_disable_autorum()
    {
        return true;
    }
}

if (!function_exists('newrelic_end_of_transaction')) {

    /**
     * Stop recording the web transaction immediately.
     *
     * @return null
     */
    function newrelic_end_of_transaction()
    {
        return null;
    }
}

if (!function_exists('newrelic_end_transaction')) {

    /**
     * Causes the current transaction to end immediately, and will ship all of the metrics gathered thus far to the daemon unless the ignore parameter is set to true.
     *
     * @param boolean $ignore
     * @return null
     */
    function newrelic_end_transaction($ignore = false)
    {
        return true;
    }
}

if (!function_exists('newrelic_get_browser_timing_footer')) {

    /**
     * Returns the JavaScript string to inject at the very end of the HTML output for page load timing.
     *
     * @param boolean $include_tags If omitted or set to true, the returned JavaScript string will be enclosed in a <script> tag.
     * @return string
     */
    function newrelic_get_browser_timing_footer($include_tags = true)
    {
        return '';
    }
}

if (!function_exists('newrelic_get_browser_timing_header')) {

    /**
     * Returns the JavaScript string to inject as part of the header for page load timing.
     *
     * @param boolean $include_tags If omitted or set to true, the returned JavaScript string will be enclosed in a <script> tag.
     * @return string
     */
    function newrelic_get_browser_timing_header($include_tags = true)
    {
        return '';
    }
}

if (!function_exists('newrelic_ignore_apdex')) {

    /**
     * Do not generate Apdex metrics for this transaction.
     *
     * @return null
     */
    function newrelic_ignore_apdex()
    {
        return null;
    }
}

if (!function_exists('newrelic_ignore_transaction')) {

    /**
     * Do not generate metrics for this transaction.
     *
     * @return null
     */
    function newrelic_ignore_transaction()
    {
        return null;
    }
}

if (!function_exists('newrelic_name_transaction')) {

    /**
     * Sets the name of the transaction to the specified name.
     *
     * @param string $name
     * @return bool
     */
    function newrelic_name_transaction($name)
    {
        return true;
    }
}

if (!function_exists('newrelic_notice_error')) {

    /**
     * Report an error at this line of code, with a complete stack trace.
     *
     * @param string $message
     * @param Exception $exception
     * @return null
     */
    function newrelic_notice_error($message, Exception $exception = null)
    {
        return null;
    }
}

if (!function_exists('newrelic_record_custom_event')) {

    /**
     * Records a New Relic Insights custom event.
     *
     * @param string $name
     * @param array $attributes The keys should be the attribute names, which may be up to 255 characters in length, and the values should be scalar values.
     * @return null
     */
    function newrelic_record_custom_event($name, array $attributes)
    {
        return null;
    }
}

if (!function_exists('newrelic_set_appname')) {

    /**
     * Sets the name of the application to name.
     *
     * @param string $name
     * @param string $license
     * @param bool $xmit
     * @return bool
     */
    function newrelic_set_appname($name, $license = '', $xmit = false)
    {
        return true;
    }
}

if (!function_exists('newrelic_set_user_attributes')) {

    /**
     * @param string $user
     * @param string $account
     * @param string $product
     * @return bool
     */
    function newrelic_set_user_attributes($user, $account, $product)
    {
        return true;
    }
}

if (!function_exists('newrelic_start_transaction')) {

    /**
     * Use this call if you have ended a transaction before your script terminates and you want to start a new transaction.
     *
     * @param string $appname
     * @param string $license
     * @return bool
     */
    function newrelic_start_transaction($appname, $license = '')
    {
        return true;
    }
}
