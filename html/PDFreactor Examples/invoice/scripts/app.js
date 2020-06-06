var app = angular.module('invoiceApp', []);

app.controller('invoiceController', function($scope, $http) {
    $http.get("data.json").then(function(response) {
        $scope.data = response.data;

        app.calculateSubtotals($scope.data);
    }).catch(function(e) {
        console.log("Error", e)
    });
});

app.filter('formatAsValue', function() {
    return function(number, locale) {
        return new Intl.NumberFormat(locale, { minimumFractionDigits: 2 }).format(number);
    };
});

app.filter('formatAsCurrency', function() {
    return function(number, locale, currency) {
        return new Intl.NumberFormat(locale, { style: "currency", currency: currency, currencyDisplay: "code", minimumFractionDigits: 2 }).format(number);
    };
});

app.filter('formatAsDate', function() {
    return function(date, locale) {
        if (date) {
            // for localized dates, use the following:
            // return new Intl.DateTimeFormat(locale).format(new Date(date));
            
            return new Date(date).toISOString().slice(0, 10);
        }
    };
});

app.filter('formatAsArticleNumber', function() {
    return function(value) {
        return new Intl.NumberFormat('', { minimumIntegerDigits: 4, useGrouping: false }).format(value);
    };
});

app.filter('formatAsPercentage', function() {
    return function(number, locale) {
        return new Intl.NumberFormat(locale, { style: 'percent', minimumFractionDigits: 2 }).format(number);
    };
});

app.calculateSubtotals = function(data) {
    var previousSubtotal = 0;
    
    for (var i = 0; i < data.positions.length; i++) {
        data.positions[i].total = data.positions[i].qty * data.positions[i].unitprice;
        data.positions[i].subtotal = data.positions[i].total + previousSubtotal;
        
        previousSubtotal = data.positions[i].subtotal;
    }
    
    data.subtotal = previousSubtotal;
    data.subtotalVat = data.subtotal * data.vat.value;
    data.totalWithVat = data.subtotal + data.subtotalVat;
};
