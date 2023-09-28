function initMap() {
    // 맵을 그릴 요소
    var mapElement = document.getElementById("map");

    // Geolocation API를 사용하여 사용자의 현재 위치 가져옴
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var userLocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            // 맵의 옵션을 설정
            var mapOptions = {
                zoom: 13, // 줌 레벨
                center: userLocation // 맵의 중심을 사용자의 위치로 설정
            };

            // 지도 인스턴스를 생성
            var map = new google.maps.Map(mapElement, mapOptions);

            // 마커를 생성
            var marker = new google.maps.Marker({
                position: userLocation,
                map: map,
                title: 'Your Location'
            });
        });
    } else {

        console.error("Geolocation is not supported by your browser.");
    }
}

window.onload = function () {
    initMap();
};
