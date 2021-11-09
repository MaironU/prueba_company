let url_base = "https://globalsystemcompany.herokuapp.com"
let shipping_cart = []

$(document).ready(function(){
    shipping_cart = JSON.parse(localStorage.getItem("shipping_cart")) || []
    showProductsInCar()
})

$(".content__products-card").on("click", function(){
    let id = $(this).data("id")
    $.get(`./api/product.php?m=g&id=${id}`).then(res => {
        let response = JSON.parse(res)
        if(response.success){
            let product = response.data

            if(!isInTheCar(product)){
                product.cantidad = 1
                shipping_cart.push(product)
                saveCar(shipping_cart) 
                showProductsInCar()
            }else{
                alert("El producto ya está en el carrito")
            }
        }
    })
})

function isInTheCar(product){
    return shipping_cart.some(elem => elem.id == product.id)
}

function showProductsInCar(){
    $("#body_products").html("")
    let total = 0;
    if(shipping_cart.length > 0){
        shipping_cart.forEach(elem => {
            $("#body_products").append(`
                <tr>
                    <td>
                        <span>${elem.cantidad}</span>
                        <img src="${url_base}/views/assets/imgs/icons/more.png" alt="" width="22px" onclick="incrementQuantity(${elem.id})"> 
                        <img src="${url_base}/views/assets/imgs/icons/less.png" alt="" width="22px" onclick="decrementQuantity(${elem.id})"> 
                    </td>
                    <td>
                        ${elem.name}
                    </td>
                    <td>
                        ${elem.price}
                    </td>
                    <td>
                        ${(elem.price*elem.cantidad).toFixed(1)}
                    </td>
                    <td>
                        <img src="${url_base}/views/assets/imgs/icons/eliminar.png" alt="" width= "20px" class="pointer" onclick="deleteProduct('${elem.id}')">
                    </td>
                </tr>
            `)
            total+=(elem.price*elem.cantidad)
        })
    }else{
        $("#body_products").html(`
            <span class="text-danger text-center">No hay productos en el carrito</span>
        `)
    }
    $("#total").text(total.toFixed(1))
}

function deleteProduct(id){
    shipping_cart = shipping_cart.filter(elem => elem.id != id)
    saveCar(shipping_cart) 
    showProductsInCar()
}

function incrementQuantity(id){
    let product = shipping_cart.find(elem => elem.id == id)
    let cantidad = product.cantidad + 1
    product.cantidad = cantidad

    saveCar(shipping_cart)
    showProductsInCar()
}

function decrementQuantity(id){
    let product = shipping_cart.find(elem => elem.id == id)
    if(product.cantidad > 1){
        let cantidad = product.cantidad -1
        product.cantidad = cantidad
    
        saveCar(shipping_cart)
        showProductsInCar()
    }
}

function saveCar(shipping_cart){
    localStorage.setItem("shipping_cart", JSON.stringify(shipping_cart))  
}

$("#pay").on('click', function(){
    let total = 0;
    shipping_cart.forEach(elem => total+=(elem.price*elem.cantidad))

    alert(`debes pagar ${total.toFixed(1)}`)
})