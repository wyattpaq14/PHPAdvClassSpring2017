(function () {
    
    'use strict';
    angular
        .module('app.corps')
        .controller('CorpsDetailController', CorpsDetailController);

    CorpsDetailController.$inject = ['$routeParams','CorpsService'];

    /*
     * This controller will find the details of an address from the address service.
     */
    function CorpsDetailController($routeParams, CorpsService) {
        var vm = this;

        vm.corps = {};
        var corpsID = $routeParams.corpsId;

        activate();

        ////////////

        function activate() {
            CorpsService.getAddress(corpsID).then(function (response) {
                vm.corps = response;
                
                console.log(vm.corps);                
                loadMap(vm.corps.location);
            });
        }
               
        function loadMap(location) {

            var lat = location.split(',')[0];
            var long = location.split(',')[1];

            var myCenter = new google.maps.LatLng(lat, long);

            var mapProp = {
                center: myCenter,
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.querySelector('.googleMap'), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter
            });
            marker.setMap(map);

        }

    }
    
})();