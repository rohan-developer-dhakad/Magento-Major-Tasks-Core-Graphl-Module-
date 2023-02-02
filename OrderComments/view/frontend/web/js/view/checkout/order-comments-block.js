define(
        [
            'jquery',
            'ko',
            'uiComponent'
        ],
        function ($, ko, Component) {
            'use strict';
            return Component.extend({
                defaults: {
                    template: 'Task_OrderComments/checkout/order-comments-block'
                },
                isEnabled: window.checkoutConfig.enabled_comments,
                initialize: function () {
                    var self = this;
                     $(document).on("click", ".input-text.task_order_comments", function () {
                        var activePay = $(".payment-method._active").find("input.radio").val();
                            $(this).attr('id',activePay);
                        });
                return this._super();
                },
            });
            
        }
);