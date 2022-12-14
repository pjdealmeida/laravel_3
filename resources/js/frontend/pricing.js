/**
 * PRICING TABLES
 **/

import "odometer/odometer.min.js";
import "odometer/themes/odometer-theme-minimal.css";

(function($, $scope) {
    $scope.$pricingTable = $(".pricing-table table");

    $scope.gridFloatBreakpointMax = 768 - 1;

    $scope.basis = $('input[name="pricing-basis"]').val();

    // Needs a way to calculate prices, it will require additional logic and work
    $scope.calculatePrice = function() {
        return {};
    };

    $scope.resizeWindow = function(e) {
        if (e.innerWidth <= $scope.gridFloatBreakpointMax) {
            $("> .expand-mobile .visible-cell", $scope.$pricingTable).attr(
                "colspan",
                2
            );
        } else {
            $("> .expand-mobile .visible-cell", $scope.$pricingTable).removeAttr(
                "colspan"
            );
        }
    };

    $scope.moveToPricingTab = function(tab) {
        var hid = "ph-" + tab;

        //$("thead th.visible-cell", $pricingTable).removeClass("visible-cell").removeAttr("colspan");
        $(".expand-mobile .visible-cell", $scope.$pricingTable)
            .removeClass("visible-cell")
            .removeAttr("colspan");
        $("thead th#" + hid, $scope.$pricingTable)
            .addClass("visible-cell")
            .attr("colspan", 2);
        $(".expand-mobile td[headers*=" + hid + "]", $scope.$pricingTable).attr(
            "colspan",
            2
        );

        $("td[headers].visible-cell", $scope.$pricingTable).removeClass(
            "visible-cell"
        );
        $("td[headers*=" + hid + "]", $scope.$pricingTable).addClass(
            "visible-cell"
        );
    };

    $(function() {
        $(".pricing-table-tabs").on("change", 'input[name="pricing-plan"]', function() {
                $scope.moveToPricingTab(this.value);
            }
        );

        $('[data-toggle="price"]').on("change", function() {
            const $pricingTable = $(this).closest(".pricing-table");
            $scope.basis = this.value;

            $pricingTable
                .removeClass("yearly-display monthly-display")
                .addClass($scope.basis + "-display");

            $(".price", $pricingTable).each(function() {
                /** Add the basis css class to 'this' if you want to display /yr label for the price when displayed a yearly basis **/
                // $(this).removeClass("monthly yearly").addClass($scope.basis);
                this.innerHTML = $(this).data($scope.basis);
            });
        });

        // Windows resize
        $(window).resize(function() {
            $scope.resizeWindow(this);
        });

        $scope.resizeWindow(window);
    });
})(jQuery, {});
