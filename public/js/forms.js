$(document).ready(function() {


});

































// let aside_menu_toggle = $(".navbar-menu_icon"),
//     aside_category = $('.aside-category');

// aside_menu_toggle.click(function() {
//     $("aside").toggleClass("aside-show")
// });

// aside_category.click(function(e) {
//     $(this).find(".aside-category_content").slideToggle(400);
// });

// let open_btn = $(".open-btn");
// open_btn.click(function() {
//     $("#" + $(this).attr("name")).css("display", "flex").fadeIn(400);
// });

// let close_btn = $(".close-btn");
// close_btn.click(function() {
//     $("#" + $(this).attr("name")).fadeOut(400);
// });

// //requests and backend and mathematics 

// $("[name = 'NEW_INVOICE']").click(function() {
//     let test = $("#test");
//     test.click();
// });

// $(document).on("keyup", "#paid_amount , #discount ", function() {
//     let discount = $("#discount").val(),
//         paid_amount = $("#paid_amount").val(),
//         invoice_total = $("#invoice_total").val(),
//         result = $("#result");
//     result.attr("value", (invoice_total - discount) - paid_amount);
// });


// $(document).on("keyup", "#SALE_QUANTITY", function() {
//     let available_quantity = parseInt($("#AVAILABLE_QUANTITY").val()),
//         quantity = parseInt($(this).val()),
//         error_msg = $(this).next(".input-error");
//     if (quantity > available_quantity) {
//         error_msg.addClass("show");
//     } else {
//         error_msg.removeClass("show");

//     }
// });


// $(document).on("change", "#SELECT_PRODUCT", function() {
//     let product_id = $(this).val(),
//         column_name = "id";
//     $.ajax({
//         method: "POST",
//         url: "storage_product",
//         data: { product_id: product_id },
//         dataType: "json",
//         success: function(response) {
//             $.each(response, function(key, product) {
//                 $("#AVAILABLE_QUANTITY").val(product.quantity);
//                 $("#PRICE").val(product.price);
//                 $("#SALE_PRICE").val(product.sale_price);
//                 console.log(product);
//             });
//         }
//     });
// });


// setTimeout(function() {
//     $(".alert").slideUp(300)
// }, 5000);

// // delete supplier from database
// $("[name = 'DELETE_SUPPLIER']").click(function() {
//     let supplier_id = $(this).attr("value");
//     $("[ name = 'CONFORM_DELETE' ]").on("click", function() {
//         $.ajax({
//             method: "POST",
//             url: "delete_supplier",
//             data: { supplier_id: supplier_id },
//             dataType: "html",
//             success: function(response) {
//                 window.location.href = 'suppliers';
//             }
//         });
//     });
// });

// $("[name = 'DELETE_CUSTOMER']").click(function() {
//     let customer_id = $(this).attr("value");
//     $("[ name = 'CONFORM_DELETE' ]").on("click", function() {
//         $.ajax({
//             method: "POST",
//             url: "delete_customer",
//             data: { customer_id: customer_id },
//             dataType: "html",
//             success: function(response) {
//                 window.location.href = 'customers';
//             }
//         });
//     });
// });

// $("[data-name = 'DELETE_PRODUCT']").click(function() {
//     let product_id = $(this).attr("data-value");
//     $("[ name = 'CONFORM_DELETE' ]").on("click", function() {
//         $.ajax({
//             method: "POST",
//             url: "delete_product",
//             data: { product_id: product_id },
//             dataType: "html",
//             success: function(response) {
//                 window.location.href = 'products';
//             }
//         });
//     });
// });

// $("[name = 'DELETE_CART_ITEM']").click(function() {
//     let item_id = $(this).attr("value"),
//         action_Type = $(this).attr("data-type"),
//         url = $(this).attr("data-url");
//     $.ajax({
//         method: "POST",
//         url: "CART",
//         data: { product_id: item_id, ACTION_TYPE: action_Type },
//         dataType: "html",
//         success: function(response) {
//             window.location.href = url;
//         }
//     });
// });

// $("[name = 'DELETE_INVOICE']").click(function() {
// let url = $(this).attr("value");
// $.ajax({
//     method: "POST",
//     url: "CART",
//     data: { ACTION_TYPE: "DELETE_INVOICE" },
//     dataType: "html",
//     success: function(response) {
//         window.location.href = url;
//     }
// });
// });


// });