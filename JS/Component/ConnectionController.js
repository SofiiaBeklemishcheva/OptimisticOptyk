
class ConnectionController {
    constructor() {
        this.xhr = new XMLHttpRequest();

    }
    getTypesByAge() {
        const ths = this;
        console.log("Succed")
        let age = document.getElementById("age")
        age.addEventListener("change", function () {
            console.log(age.value)
            ths.xhr.open("POST", "API/get-types-by-age.php", true);
            ths.xhr.setRequestHeader('Content-Type', 'application/json');
            ths.xhr.send(JSON.stringify({
                value: age.value
            }));
        })
    }
    getLocalizationsWithType() {
        const ths = this;
        console.log("Succed")
        let test_kind = document.getElementById("eyetest_kind")
        test_kind.addEventListener("change", function () {
            console.log(test_kind.value)
            ths.xhr.open("POST", "API/get-location-with-type.php", true);
            ths.xhr.setRequestHeader('Content-Type', 'application/json');
            ths.xhr.send(JSON.stringify({
                value: test_kind.value
            }));
        })

    }
}

