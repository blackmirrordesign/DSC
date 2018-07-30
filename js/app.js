/* global $ */

// $(document).ready(function() {
//     let menu = $('nav > ul'),
//         menuLink = $('#mobile-menu a');
//     menuLink.on('click', function() {
//         if (menu.hasClass('closed')) {
//             menu.removeClass('closed');
//             menu.addClass('open');

//         } else {
//             menu.removeClass('open');
//             menu.addClass('closed');
//         }
//     });
// });
function resizeHeaderOnScroll() {
    const distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 210,
        headerEl = document.getElementById('js-header');
    if (distanceY > shrinkOn) {
        headerEl.classList.add("smaller");
    } else {
        headerEl.classList.remove("smaller");
    }

}

window.addEventListener('scroll', resizeHeaderOnScroll);

function resizeHeaderHomeOnScroll() {
    const distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOnHome = 70,
        headerHomeEl = document.getElementById('js-headerHome');
    navEl = document.getElementById('sticky-top');


    if (distanceY > shrinkOnHome) {
        headerHomeEl.classList.add("smaller");
        navEl.classList.add("navHome");

    } else {
        headerHomeEl.classList.remove("smaller");
        navEl.classList.remove("navHome");

    }
}
window.addEventListener('scroll', resizeHeaderHomeOnScroll);


$(document).ready(function() {
    $(function() {
        $("#tabs").tabs();
    });
    $(function() {
        $("#accordion").accordion({
            heightStyle: "content"
        });
    });
    $('.popover-dismiss').popover({
        trigger: 'focus'
    });
});
$(document).ready(function() {
    $(".add-row-degree").click(function() {
        var degree = $("#degree").val();
        var institution = $("#institution").val();
        var year = $("#year").val();
        var markup = '<tr class="card col-md-12 m-1"><td class=" card-body p-0"><input type="checkbox"  class="float-left mr-2" name="record"><p class="card-text float-left">' + degree + "-" + institution + ", " + year + '</p><a href="#" class="btn btn-outline-secondary float-right justify-content-end delete-row-degree">X</a></td></tr>';
        $("table tbody").append(markup);
    });

    // Find and remove selected table rows
    $(".delete-row-degree").click(function() {
        $("table tbody").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
            }
        });
    });
    $(".add-row-licenses").click(function() {
        var licenseName = $("#licenseName").val();
        var license = $("#licenses").val();
        var markup = '<tr class="card col-md-12 m-1"><td class=" card-body p-0"><input type="checkbox"  class="float-left mr-2" name="record"><p class="card-text float-left">' + licensesName + " , " + licenses + '</p><a href="#" class="btn btn-outline-secondary float-right justify-content-end delete-row-licenses">X</a></td></tr>';
        $("table tbody").append(markup);
    });

    // Find and remove selected table rows
    $(".delete-row-licenses").click(function() {
        $("table tbody").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
            }
        });
    });
    $(".add-row-membership").click(function() {
        var membershipName = $("#membershipName").val();
        var year = $("#year").val();
        var to = $("#to").val();
        var markup = '<tr class="card col-md-12 m-1"><td class=" card-body p-0"><input type="checkbox"  class="float-left mr-2" name="record"><p class="card-text float-left">' + membershipName + " , " + year + " - " + to + '</p><a href="#" class="btn btn-outline-secondary float-right justify-content-end delete-row-membership">X</a></td></tr>';
        $("table tbody").append(markup);
    });

    // Find and remove selected table rows
    $(".delete-row-membership").click(function() {
        $("table tbody").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
            }
        });
    });
    $(".add-row-registration").click(function() {
        var registrationName = $("#registrationName").val();
        var year = $("#year").val();
        var to = $("#to").val();
        var markup = '<tr class="card col-md-12 m-1"><td class=" card-body p-0"><input type="checkbox"  class="float-left mr-2" name="record"><p class="card-text float-left">' + registrationName + " , " + year + " - " + to + '</p><a href="#" class="btn btn-outline-secondary float-right justify-content-end delete-row-registration">X</a></td></tr>';
        $("table tbody").append(markup);
    });

    // Find and remove selected table rows
    $(".delete-row-registration").click(function() {
        $("table tbody").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
            }
        });
    });
});
$(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
});
// Events
$('.dropdown-container')
    .on('click', '.dropdown-button', function() {
        $('.dropdown-list').toggle();
    })
    .on('input', '.dropdown-search', function() {
        var target = $(this);
        var search = target.val().toLowerCase();

        if (!search) {
            $('li').show();
            return false;
        }

        $('li').each(function() {
            var text = $(this).text().toLowerCase();
            var match = text.indexOf(search) > -1;
            $(this).toggle(match);
        });
    })
    .on('change', '[type="checkbox"]', function() {
        var numChecked = $('[type="checkbox"]:checked').length;
        $('.quantity').text(numChecked || 'Any');
    });

// JSON of States for demo purposes
var usStates = [
    { name: 'ALABAMA', abbreviation: 'AL' },
    { name: 'ALASKA', abbreviation: 'AK' },
    { name: 'AMERICAN SAMOA', abbreviation: 'AS' },
    { name: 'ARIZONA', abbreviation: 'AZ' },
    { name: 'ARKANSAS', abbreviation: 'AR' },
    { name: 'CALIFORNIA', abbreviation: 'CA' },
    { name: 'COLORADO', abbreviation: 'CO' },
    { name: 'CONNECTICUT', abbreviation: 'CT' },
    { name: 'DELAWARE', abbreviation: 'DE' },
    { name: 'DISTRICT OF COLUMBIA', abbreviation: 'DC' },
    { name: 'FEDERATED STATES OF MICRONESIA', abbreviation: 'FM' },
    { name: 'FLORIDA', abbreviation: 'FL' },
    { name: 'GEORGIA', abbreviation: 'GA' },
    { name: 'GUAM', abbreviation: 'GU' },
    { name: 'HAWAII', abbreviation: 'HI' },
    { name: 'IDAHO', abbreviation: 'ID' },
    { name: 'ILLINOIS', abbreviation: 'IL' },
    { name: 'INDIANA', abbreviation: 'IN' },
    { name: 'IOWA', abbreviation: 'IA' },
    { name: 'KANSAS', abbreviation: 'KS' },
    { name: 'KENTUCKY', abbreviation: 'KY' },
    { name: 'LOUISIANA', abbreviation: 'LA' },
    { name: 'MAINE', abbreviation: 'ME' },
    { name: 'MARSHALL ISLANDS', abbreviation: 'MH' },
    { name: 'MARYLAND', abbreviation: 'MD' },
    { name: 'MASSACHUSETTS', abbreviation: 'MA' },
    { name: 'MICHIGAN', abbreviation: 'MI' },
    { name: 'MINNESOTA', abbreviation: 'MN' },
    { name: 'MISSISSIPPI', abbreviation: 'MS' },
    { name: 'MISSOURI', abbreviation: 'MO' },
    { name: 'MONTANA', abbreviation: 'MT' },
    { name: 'NEBRASKA', abbreviation: 'NE' },
    { name: 'NEVADA', abbreviation: 'NV' },
    { name: 'NEW HAMPSHIRE', abbreviation: 'NH' },
    { name: 'NEW JERSEY', abbreviation: 'NJ' },
    { name: 'NEW MEXICO', abbreviation: 'NM' },
    { name: 'NEW YORK', abbreviation: 'NY' },
    { name: 'NORTH CAROLINA', abbreviation: 'NC' },
    { name: 'NORTH DAKOTA', abbreviation: 'ND' },
    { name: 'NORTHERN MARIANA ISLANDS', abbreviation: 'MP' },
    { name: 'OHIO', abbreviation: 'OH' },
    { name: 'OKLAHOMA', abbreviation: 'OK' },
    { name: 'OREGON', abbreviation: 'OR' },
    { name: 'PALAU', abbreviation: 'PW' },
    { name: 'PENNSYLVANIA', abbreviation: 'PA' },
    { name: 'PUERTO RICO', abbreviation: 'PR' },
    { name: 'RHODE ISLAND', abbreviation: 'RI' },
    { name: 'SOUTH CAROLINA', abbreviation: 'SC' },
    { name: 'SOUTH DAKOTA', abbreviation: 'SD' },
    { name: 'TENNESSEE', abbreviation: 'TN' },
    { name: 'TEXAS', abbreviation: 'TX' },
    { name: 'UTAH', abbreviation: 'UT' },
    { name: 'VERMONT', abbreviation: 'VT' },
    { name: 'VIRGIN ISLANDS', abbreviation: 'VI' },
    { name: 'VIRGINIA', abbreviation: 'VA' },
    { name: 'WASHINGTON', abbreviation: 'WA' },
    { name: 'WEST VIRGINIA', abbreviation: 'WV' },
    { name: 'WISCONSIN', abbreviation: 'WI' },
    { name: 'WYOMING', abbreviation: 'WY' }
];

// <li> template
var stateTemplate = _.template(
    '<li class="multiselect">' +
    '<input name="<%= abbreviation %>" type="checkbox">' +
    '<label for="<%= abbreviation %>"><%= capName %></label>' +
    '</li>'
);

// Populate list with states
_.each(usStates, function(s) {
    s.capName = _.startCase(s.name.toLowerCase());
    $('.multi').append(stateTemplate(s));
});