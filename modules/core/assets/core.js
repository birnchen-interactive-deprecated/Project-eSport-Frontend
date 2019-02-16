$(document).ready(function () {
    var fromSpotContainer = $('#from_spot_stations_container');
    var fromNameSpace = '#from_search_input';
    var fromResult = $('#relationform-from_search_input_result');
    var fromFormField = $('#relationform-from_spot_id');
    var fromInputField = $('#relationform-from_search_input');
    var fromSetBtn = $('#from_search_input_set_btn');

    $('#from_spot_id').on("click", function () {
        fromSpotContainer.toggle();
    });
    $('#from_search_input_search_btn').on("click", function () {

        getSpots(fromNameSpace, fromResult, fromInputField, fromSetBtn);
    });
    fromSetBtn.on("click", function () {
        if (fromResult.val()) {
            setSpot(fromResult, fromFormField, fromInputField, fromSpotContainer);
        }
    });
    var toSpotContainer = $('#to_spot_stations_container');
    var toNameSpace = '#to_search_input';
    var toResult = $('#relationform-to_search_input_result');
    var toFormField = $('#relationform-to_spot_id');
    var toInputField = $('#relationform-to_search_input');
    var toSetBtn = $('#to_search_input_set_btn');
    $('#to_spot_id').on("click", function () {
        toSpotContainer.toggle();
    });
    $('#to_search_input_search_btn').on("click", function () {
        getSpots(toNameSpace, toResult, toInputField, toSetBtn);
    });
    toSetBtn.on("click", function () {
        if (toResult.val()) {
            setSpot(toResult, toFormField, toInputField, toSpotContainer);
        }
    });
});

/**
 * Gets the Spots for the corresponding Stops/Knots.
 *
 * @param nameSpace the name space for the spinner
 * @param result the dropdown field for the results
 * @param searchInput the search input
 * @param setBtn the set button
 */
function getSpots(nameSpace, result, searchInput, setBtn) {
    if (!result.val()) {
        $(nameSpace + '_spinner').show();
    }
    $.ajax({
        url: baseUrl + "core/station/get-spots",
        dataType: "json",
        data: {
            searchInput: searchInput.val()
        },
        success: function (data) {
            $(nameSpace + '_spinner').hide();
            result.empty();
            data.forEach(function (element) {
                result.append($('<option>', {value: element['id'], text: element['string']}));
            });
            result.show();
            setBtn.show();
        },
        error: function (data) {
            $(nameSpace + '_spinner').hide();
            //TODO: Errorhandling
        }
    });
}

/**
 * Sets the Spot into the Field of the RelationForm if u chose a spotId.
 *
 * @param result the dropdown field for the results
 * @param formField the relationform field to set the spotId
 * @param searchInput the search input to reset
 * @param container the correct container to toggle
 */
function setSpot(result, formField, searchInput, container) {
    $.ajax({
        url: baseUrl + "core/station/get-spots",
        dataType: "json",
        data: {
            spotId: result.val()
        },
        success: function (data) {
            formField.empty().append($('<option>', {value: data['id'], text: data['string']}));
            result.empty();
            searchInput.val("");
            container.toggle();
        },
        error: function (data) {
            //TODO: Errorhandling
        }
    });
}

