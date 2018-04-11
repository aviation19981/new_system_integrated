/*Service Worker para IVAO COLOMBIA*/
/*Por: IVAO Colombia & Felipe Lobo*/

const CACHE_NAME="ivaocolo-v5"
const cache_urls=["css/combined.min.css","js/main.js","main/css/combined-main.min.css","img/co.svg",
"main/js/jquery-3.1.1.min.js","main/js/scripts.js"]
console.log("Soy el Service Worker")

/*INSTALAR EL SERVICE WORKER*/
self.addEventListener("install",function(ev){
	console.log("Im an installed worker")

	caches.open(CACHE_NAME)
		.then(function(cache) {
			console.log("CACHE")
			return cache.addAll(cache_urls)
			
		})
	})

self.addEventListener("activate",function(ev) {
			console.log("Activando Cache")
			ev.waitUntil(
				caches.keys().then(function(cache_names){
					return Promise.all(
						cache_names.map(function(cache_name){
							if(CACHE_NAME != cache_name){
								return caches.delete(cache_name)
							}
						}))
				})
				)
	
})

self.addEventListener("fetch",function(ev){
	ev.respondWith(
		caches.match(ev.request)
		.then(function(response){
			if(response){
				console.log("Ahorrando peticiones")
				return response //Devuelve del cache
			}
			return fetch(ev.request)
		})
		)

})

