<meta name="robots" content="noindex, nofollow" /><script src="https://cdn.paddle.com/paddle/v2/paddle.js"></script>

<script>window.paddleClientToken = "live_27a614c3c0678bfaea05d8404fc";window.HDPriceId="pri_01j6y3wbpcgffcdcz2phbtgbww";</script><script>
    // PADDLE
    Paddle.Initialize({
        token: window.paddleClientToken,
        eventCallback: function(event) {
            //if (event.name == "checkout.payment.initiated") {
            if (event.name == "checkout.completed") {
                $('.geofs-payment-view').htmlView('load', '/html/hd/payment.php?pending=true', {paddletx: event.data.transaction_id});
            }
        }
    });

    var priceRequest = {
        items: [{
            quantity: 1,
            priceId: window.HDPriceId
        }]
    };

    Paddle.PricePreview(priceRequest).then((result) => {
        $('.geofs-HD-price').html(result.data.details.lineItems[0].formattedTotals.subtotal);
    }).catch((error) => {
        console.error(error);
    });

</script><script>window.executeOnEventDone ? window.executeOnEventDone('afterDeferredload', function() {document.body.classList.remove('geofs-subscribed');}) : null;</script>
<script>window.executeOnEventDone('afterDeferredload', function() {Cesium.Ion.defaultAccessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJiMWQ1NWRlMy1lZmM3LTRlNDYtYWQyOS1hZDlmZmMyZGRiZWUiLCJpZCI6NzYsInNjb3BlcyI6WyJhc3IiXSwiYXNzZXRzIjpbMV0sImlhdCI6MTU1MzUwOTAwMX0.AlJJNDP3yr3dOLmcMnuJdsODGrVoSpm9lvtcXuGM99M';});</script>
<script>geofsNewHDState = false; geofs.geoIpUpdate = async function() {jQuery('.geofs-creditContainer').html('<a rel="nofollow" target="_blank" href="https://s2maps.eu">Sentinel-2 cloudless - https://s2maps.eu</a> by <a rel="nofollow" target="_blank" href="https://eox.at/">EOX IT Services GmbH</a> (Contains modified Copernicus Sentinel data 2016 & 2017)');document.body.classList.remove('geofs-hd'); geofs.api.imageryProvider = new Cesium.UrlTemplateImageryProvider({url: 'https://data2.geo-fs.com/sent//{z}/{x}/{reverseY}.jpg',tilingScheme: new Cesium.GeographicTilingScheme({numberOfLevelZeroTilesX:2, numberOfLevelZeroTilesY:1}),hasAlphaChannel: false,enablePickFeatures: false,maximumLevel: 13}); geofs.api.setImageryProvider(geofs.api.imageryProvider, true, 1, 1, 1, 'geofs'); geofs.api.setTerrainProvider(new geofs.api.FlatRunwayTerrainProvider({baseProvider: new Cesium.CesiumTerrainProvider({url: 'https://data2.geo-fs.com/srtm/', requestWaterMask: false, requestVertexNormals:true}),bypass: false,maximumLevel: 12}), 'geofs'); geofs.api.analytics.event('geofs', 'mode', 'sd', 1);};</script>
<script>window.executeOnEventDone('geofsStarted', function() {if(geofs.api.hdOn === geofsNewHDState) return; jQuery('body').trigger('terrainProviderWillUpdate'); geofs.geoIpUpdate(); geofs.api.hdOn = geofsNewHDState; geofs.api.renderingQuality(); jQuery('body').trigger('terrainProviderUpdate');});</script>
