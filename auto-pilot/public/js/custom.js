$(document).ready(function () {
    $("#radioSuccess3").click(function () {
        $(".preorder").show();
        $(".withoutpreorder").hide();
    });
    $("#radioSuccess4").click(function () {
        $(".preorder").hide();
        $(".withoutpreorder").show();
    });

    $("#radioSuccess11").click(function () {
        $(".customer_table_hide").show();
        $(".customer_table").hide();
    });
    $("#radioSuccess12").click(function () {
        $(".customer_table_hide").show();
        $(".customer_table").hide();
    });
    $("#radioSuccess13").click(function () {
        $(".customer_table_hide").show();
        $(".customer_table").hide();
    });
    $("#radioSuccess14").click(function () {
        $(".customer_table_hide").hide();
        $(".customer_table").show();
    });


    $("#radioSuccess6").click(function () {
        $(".warrenty").toggle();
    });

    $(".click_optional_vehical").click(function () {
        $(".optional_vehical").slideToggle("slow");
    });
    $("#warrenty_check").click(function () {
        $(".warrenty").slideToggle("slow");
    });

    $("#loan_check").click(function () {
        if ($("#loan_check").is(":checked")) {
            $("#loan").val("0");
            $("#loan").show();
        } else {
            $("#loan").hide();
        }
    });

    $("#vehiclecondition2").click(function () {
        if ($("#vehiclecondition2").is(":checked")) {
            $(".brand").fadeOut(500);
            $(".used").fadeOut(500);
        }
    });
    $("#vehiclecondition1").click(function () {
        if ($("#vehiclecondition1").is(":checked")) {
            $(".brand").fadeIn();
            $(".used").fadeOut();
        }
    });
    $("#vehiclecondition3").click(function () {
        if ($("#vehiclecondition3").is(":checked")) {
            $(".brand").fadeOut();
            $(".used").fadeIn();
        }
    });
    $("#Recondition").click(function () {
        if ($("#Recondition").is(":checked")) {
            $(".Used").fadeOut();
            $(".Recondition").fadeIn();
        }
    });
    $("#Used").click(function () {
        if ($("#Used").is(":checked")) {
            $(".Recondition").fadeOut();
            $(".Used").fadeIn();
        }
    });

    $("#warrenty").click(function () {
        if ($("#warrenty").is(":checked")) {
            $(".warrenty").fadeIn();
        }
    });

    $("#BrandNew").click(function () {
        if ($("#BrandNew").is(":checked")) {
            $(".Recondition").fadeOut();
            $(".Used").fadeOut();
        }
    });

    $(".bill-lading").click(function () {
        $(".bill-lading").fadeOut();
        $(".bill-lading-show").fadeIn();
    });
    $(".bill-lading1").click(function () {
        $(".bill-lading-show").fadeOut();
        $(".bill-lading").fadeIn();
    });
    $("#under").click(function () {
        $(".over").hide();
        $(".under").show();
    });
    $("#over").click(function () {
        $(".under").hide();
        $(".over").show();
    });
    $("#costinvoice").click(function () {
        $(".costwithoutinvoice").hide();
        $(".costinvoice").show();
    });
    $("#costwithoutinvoice").click(function () {
        $(".costinvoice").hide();
        $(".costwithoutinvoice").show();
    });

    //Bracnh Setup
    $("#Sunday").click(function () {
        if ($("#Sunday").is(":checked")) {
            $(".open_hour_sunday").show();
            $(".close_hour_sunday").show();
        }
    });

    $("#Saturday").click(function () {
        $(".open_hour").show();
        $(".close_hour").show();
    });

    // $('.show0').click(function(){

    //   $('.show1').slideToggle('slow');
    //   if($(this).text() == 'close')
    //   {
    //       $(this).text('Show More..');
    //   }
    //   else
    //   {
    //       $(this).text('Show Less..');
    //   }
    //       });
});

$(document).ready(function () {
    $(".show0").click(function () {
        var link = $(this);
        $(".show1").slideToggle("slow", function () {
            if ($(this).is(":visible")) {
                link.text("Show less..");
            } else {
                link.text("Show more...");
            }
        });
    });

    $(".show00").click(function () {
        var link = $(this);
        $(".show11").slideToggle("slow", function () {
            if ($(this).is(":visible")) {
                link.text("Show less..");
                $(".price").css("display", "none");
                $(".price2").css("display", "block");
            } else {
                link.text("Show more...");
                $(".price").css("display", "block");
                $(".price2").css("display", "none");
            }
        });
    });

    $(".proforma0").click(function () {
        var link = $(this);
        $(".show2").slideToggle("fast", function () {
            if ($(this).is(":visible")) {
                link.text("Show less..");
            } else {
                link.text("Show more...");
            }
        });
    });

    $(".proforma1").click(function () {
        var link = $(this);

        $(".show3").slideToggle("fast", function () {
            if ($(this).is(":visible")) {
                link.text("Show less..");
            } else {
                link.text("Show more...");
            }
        });
    });

    $(".bill0").click(function () {
        var link = $(this);
        $(".bill1").slideToggle("slow", function () {
            if ($(this).is(":visible")) {
                link.text("Show less..");
            } else {
                link.text("Show more...");
            }
        });
    });

    $('[data-toggle="tooltip"]').tooltip();
});

$(".global_tax").click(function () {
    var link = $(this);
    $(".global_tax_content").slideToggle("fast", function () {
        if ($(this).is(":visible")) {
            $(".global_tax").html(
                '<i class="fas fa-minus"></i> Add Global Taxs(Optional)'
            );
        } else {
            $(".global_tax").html(
                '<i class="fas fa-plus"></i> Add Global Taxs(Optional)'
            );
        }
    });
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$("#na").click(function () {
    if ($("#na").is(":checked")) {
        $(".na").attr("disabled", "true");
    } else if (!$("#na").is(":checked")) {
        $(".na").attr("disabled", "false");
    }
});

$("#Corporate").click(function () {
    if ($("#Corporate").is(":checked")) {
        $(".bin").show();
        $(".nid").hide();
    } else if ($("#Wholesale").is(":checked")) {
        $(".nid").show();
        $(".bin").hide();
    } else if ($("#Individual").is(":checked")) {
        $(".nid").show();
        $(".bin").hide();
    }
});
$("#Wholesale").click(function () {
    if ($("#Corporate").is(":checked")) {
        $(".bin").show();
        $(".nid").hide();
    } else if ($("#Wholesale").is(":checked")) {
        $(".nid").show();
        $(".bin").hide();
    } else if ($("#Individual").is(":checked")) {
        $(".nid").show();
        $(".bin").hide();
    }
});
$("#Individual").click(function () {
    if ($("#Corporate").is(":checked")) {
        $(".bin").show();
        $(".nid").hide();
    } else if ($("#Wholesale").is(":checked")) {
        $(".nid").show();
        $(".bin").hide();
    } else if ($("#Individual").is(":checked")) {
        $(".nid").show();
        $(".bin").hide();
    }
});

$("#Bill").click(function () {
    if ($("#Bill").is(":checked")) {
        $(".bill").show();
        $(".cost").hide();
    } else if ($("#Costing").is(":checked")) {
        $(".cost").show();
        $(".bill").hide();
    } else if ($("#Retail").is(":checked")) {
        $(".cost").hide();
        $(".bill").hide();
    }
});
$("#Costing").click(function () {
    if ($("#Bill").is(":checked")) {
        $(".bill").show();
        $(".cost").hide();
    } else if ($("#Costing").is(":checked")) {
        $(".cost").show();
        $(".bill").hide();
    } else if ($("#Retail").is(":checked")) {
        $(".cost").hide();
        $(".bill").hide();
    }
});
$("#Retail").click(function () {
    if ($("#Bill").is(":checked")) {
        $(".bill").show();
        $(".cost").hide();
    } else if ($("#Costing").is(":checked")) {
        $(".cost").show();
        $(".bill").hide();
    } else if ($("#Retail").is(":checked")) {
        $(".cost").hide();
        $(".bill").hide();
    }
});
$("#Bank").click(function () {
    if ($("#Bank").is(":checked")) {
        $(".bank").show();
        $(".personal").hide();
    } else if ($("#Personal").is(":checked")) {
        $(".personal").show();
        $(".bank").hide();
    }
});
$("#Personal").click(function () {
    if ($("#Bank").is(":checked")) {
        $(".bank").show();
        $(".personal").hide();
    } else if ($("#Personal").is(":checked")) {
        $(".personal").show();
        $(".bank").hide();
    }
});

$("#Vehicle").click(function () {
    if ($("#Vehicle").is(":checked")) {
        $(".spareparts").hide();
        $(".vehicle").show();
    }
});
$("#SpareParts").click(function () {
    if ($("#SpareParts").is(":checked")) {
        $(".spareparts").show();
        $(".vehicle").hide();
    }
});
$("#g_spareparts").click(function () {
    if ($("#g_spareparts").is(":checked")) {
        $(".spareparts").show();
        $(".vehicles").hide();
    }
});
$("#g_vehicle").click(function () {
    if ($("#g_vehicle").is(":checked")) {
        $(".spareparts").hide();
        $(".vehicles").show();
    }
});
$("#Direct").click(function () {
    if ($("#Direct").is(":checked")) {
        $(".indirect").hide();
        $(".direct").show();
    }
});
$("#Indirect").click(function () {
    if ($("#Indirect").is(":checked")) {
        $(".indirect").show();
        $(".direct").hide();
    }
});
$("#Both").click(function () {
    if ($("#Both").is(":checked")) {
        $(".indirect").show();
        $(".direct").show();
        $(".both2").hide();
    }
});
$("#BrandNew").click(function () {
    if ($("#BrandNew").is(":checked")) {
        $(".auction_grade").hide();
        $(".used").hide();
    }
});
$("#Recondition").click(function () {
    if ($("#Recondition").is(":checked")) {
        $(".auction_grade").show();
        $(".used").hide();
    }
});
$("#Used").click(function () {
    if ($("#Used").is(":checked")) {
        $(".used").show();
    }
});


