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
            heightStyle: "content",
            collapsible: true,
            active: false
        });
        $("#accordion-admin").accordion({
            heightStyle: "content",
            collapsible: true,
            active: false
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
    { name: 'Addictive / Compulsive Behaviors', abbreviation: 'ADI' },
    { name: 'Addressing Mental Health & Wellness in Recovery', abbreviation: 'ADR' },
    { name: 'Agoraphobia', abbreviation: 'AG' },
    { name: 'All anxiety disorders', abbreviation: 'ALL' },
    { name: 'Anxiety', abbreviation: 'ANX' },
    { name: 'Abuse', abbreviation: 'AB' },
    { name: 'Relapse Prevention', abbreviation: 'REl' },
    { name: 'Early Adulthood Concerns', abbreviation: 'EDC' },
    { name: 'Gifted and Talented', abbreviation: 'GT' },
    { name: 'Life Adjustment', abbreviation: 'LA' },
    { name: 'Hoarding', abbreviation: 'HO' },
    { name: 'Shyness', abbreviation: 'SH' },
    { name: 'Trust Issues', abbreviation: 'TI' }
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