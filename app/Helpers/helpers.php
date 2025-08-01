<?php

    if (!function_exists('populateSessionMessage')) {
        function populateSessionMessage($message, $type = "success", $position = 'top-center'): array
        {

            $finalMessage = $message;
            session()->flash('toastMessage', [
                'message' => $finalMessage,
                'type' => $type,
                'position' => $position
            ]);

            return [
                'message' => $finalMessage,
            ];
        }
    }

    if (!function_exists('hideValidationMsg')) {
        function hideValidationMsg()
        {
            return <<<EOT
                <script>
                    function hideValidationMsg() {
                        $('input, textarea, select').on('input change', function() {
                            const fieldId = $(this).attr('id');
                            $('#' + fieldId + '_error').hide();
                            $('#' + fieldId)
                                .removeClass('is-invalid')
                                .removeAttr('style');
                        });
                    }
                </script>
            EOT;
        }
    }

    if (!function_exists('ajaxErrorHandlerScript')) {
        function ajaxErrorHandlerScript(): string
        {
            return <<<EOT
                <script>
                    function handleAjaxError(xhr, options = {}) {
                        const {
                            formSelector = null,
                            buttonSelector = null,
                            loaderSelector = null,
                            fallbackMessage = "Something went wrong. Please try again.",
                            toastType = "error",
                            toastPosition = "top-center"
                        } = options;
    
                        // Reset button state if selector provided
                        if (buttonSelector) {
                            \$(buttonSelector).removeClass("disabled btn-loading");
                        }
    
                        // Hide loader if selector provided
                        if (loaderSelector) {
                            \$(loaderSelector).addClass("d-none");
                        }
    
                        // Reset form if selector provided
                        if (formSelector && \$(formSelector).length) {
                            \$(formSelector)[0].reset();
                        }
    
                        let msg = fallbackMessage;
    
                        if (xhr.responseJSON?.message) {
                            msg = xhr.responseJSON.message;
                        } else if (xhr.responseJSON?.error) {
                            msg = xhr.responseJSON.error;
                        }
    
                        new Toast({
                            title: msg,
                            type: toastType,
                            position: toastPosition
                        }).show();
                    }
                </script>
            EOT;
        }
    }

    if (!function_exists('getStatesByCountry')) {
        function getStatesByCountry($countryId)
        {
            return DB::table('states')->where('country_id',$countryId)
                                      ->select('id','name')
                                      ->orderby('name')
                                      ->get();
        }
    }

    if (!function_exists('getCitiesByState')) {
        function getCitiesByState($stateId)
        {
            return DB::table('cities')->where('state_id',$stateId)
                                      ->select('id','name')
                                      ->orderby('name')
                                      ->get();
        }
    }
    
