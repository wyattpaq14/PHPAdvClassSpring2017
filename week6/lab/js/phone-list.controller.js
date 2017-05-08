/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


(function () {
    'use strict';
    angular
            .module('app')
            .controller('PhoneListController', PhoneListController);

    PhoneListController.$inject = ['PhonesService'];


    function PhoneListController(PhonesService) {
        var vm = this;

        vm.phones = [];
        activate();

        function activate() {
            PhonesService.getPhones().then(function (response) {
                vm.phones = response;
            });
        }
    }
})();