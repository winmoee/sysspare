{{-- resources/views/services/team.blade.php --}}
<x-app-layout>
    <!-- Add this script in the head or at the end of body -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle initial hash in URL
            if (window.location.hash) {
                const targetElement = document.querySelector(window.location.hash);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }

            // Optional: Add scroll spy functionality
            const sections = document.querySelectorAll('.section');
            const navLinks = document.querySelectorAll('nav a[href^="/sales#"]');

            function updateActiveSection() {
                let currentSection = '';

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (window.pageYOffset >= sectionTop - 150) {
                        currentSection = '#' + section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').includes(currentSection)) {
                        link.classList.add('active');
                    }
                });
            }

            window.addEventListener('scroll', updateActiveSection);
        });
    </script>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h3 class="text-2xl font-semibold text-green-600">

                {{ __('messages.sales_info') }}
            </h3>
        </div>
    </div>

    <!-- Mobile Navigation (visible on small screens) -->
    {{-- <div class="fixed bottom-0 left-0 right-0 bg-white shadow-up border-t md:hidden z-30">
        <div class="flex justify-around py-3">
            <a href="#cash_down"
               class="text-xs text-center">
                <span class="block">{{ __('messages.cash_down') }}</span>
            </a>
            <a href="#madb"
               class="text-xs text-center">
                <span class="block">{{ __('messages.madb') }}</span>
            </a>
            <a href="#meb"
               class="text-xs text-center">
                <span class="block">{{ __('messages.meb') }}</span>
            </a>
        </div>
    </div> --}}

    <!-- Update the main navigation classes -->
    <div class="fixed top-16 left-0 right-0 bg-white shadow-md z-30 hidden md:block">
        <!-- Previous desktop navigation code -->
    </div>

    <div class="max-w-7xl mx-auto p-6 lg:p- space-y-8">

        <!-- CASH DOWN -->
        <div id="cash_down" class="bg-white rounded-lg shadow-lg p-6">
            <h6 class="text-xl font-semibold text-gray-800 mb-4">
                {{ __('messages.cash_down_title') }}

            </h6>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.cash_down11') }}
            </p>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.cash_down1') }}
            </p>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.cash_down2') }}
            </p>
            <p class="text-gray-600 mb-4 leading-8">
                {{ __('messages.cash_down3') }}
            </p>
            {{-- <img src="https://images.stockcake.com/public/2/e/1/2e168899-32f9-4e17-a072-0627dda19ed7_large/farmer-holding-cash-stockcake.jpg" --}}
            {{-- style="width: 30%" height="30%"
                 alt="Training"
                 class="w-full rounded-lg"> --}}
        </div>





            <!-- MADB -->
            <div id="madb" class="bg-white rounded-lg shadow-lg p-6">
                <h6 class="text-xl font-semibold text-gray-800 mb-4">
                    {{ __('messages.hp_title') }}

                </h6>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.hp1') }}

                </p>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.hp2') }}
                </p>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.hp3') }}

                </p>
                {{-- <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8PDw8PDQ8PDw8PDw8NDQ8QDxAPEA8NFREWFhURFRUkHSggGBsmHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGi0mHyUtLystLS0vLS0tKy0uLS0tKy0tLS0vLS0tKy0tMC0tLS0tLS0tKy0tLS0uLS0tLS0tLf/AABEIALkBEAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAAAQIDBgUEB//EAEMQAAICAQIDBAgDBQUGBwAAAAECABEDBBIFITEGE0FRIjJhcYGRocFCsdEUI1Jy8DOCktLhQ3OywuLxFSRTVGKDk//EABcBAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAiEQEBAAICAgEFAQAAAAAAAAAAAQIREiExQQMTIjJRYUL/2gAMAwEAAhEDEQA/APpsIQmFEIQgEUIQCEIQCKOKEEUIGAQhCAoQhAUIQkUQihAIQMUAhCEBwijgO45ERwJRgyMcqJRyIjgSElIAyUCMIQhRCEIBFHFAIQhCCKEIBEY4oBEYQgKEcUgIoQhRFCEBQuBhAIrhCQO45C45RK45GO4Q7jEgTGDKLIXI3C4FgjuQBjuBKEIQpRxQgEIQgEIQhCijigEIRQCEIoDihCQIwgYjCgxQiuAXCKKQOFxRXAdwuKECVx3IwBlEoRXFcImDHchC5RYDHcruG6B6IQhAIQhAIQigOKEIBFCEAigYQCKEUAgYRQCBiiJkUREwJigERgTFcgIXFcVwHcdyFwJgT3QuV3C5UWEw3SG6ImBZcN0q3QLQLS0gWlZaQLwOtCEJQQhCAoQhAIQigEIQgKKMxQFCEUAihCQIxEwMVwoMiYzFcgUUdyNwCImBMiTAcVxXETALj3SsmItCLC0RaVlpEtAs3xF5UXkS8C0vKmyStnlLPA1MIQmwQijkBFHEYBFHEYBFCEBQhFAIo5EmARGERkCMRMDImFO5ExXFcgCYriJigFxExExEwAmS2H/tKTmClbANnkD0uX5FckFSF5/xED3SbFeXGwHoqx/un7Tyk5bru3//ACyfnU9er0uRl6Yx7QzqfmeU5B4bqL9fEB/v6P8AxSjrjTttsq3zA+05+rzsn+zY+5hOhpdLSiydw6kahCP+KczjiMwovkoDmFy4SCPnJRbulbPPNpcwKLtUqoG1VPLkOUbPKibPKnyStnnnyPKrfQhCVChCEAhCKAQMIQFFHFAUDCIwFcIjCAojCRJkAZG4yZEmRSMiYEyNwHcgWgWlZMCRaRLSJMiWgejSLbXdVzlubORbcqFkkn0aH5CQ07VhdvK78OUwXFe0GbKSiWy812ra4vca5v8AE/CFk23B1LZcW+hX4FRbZv0nL1GQ4xuyoRzG5b3bSZzNPj1n7MzNru4FkbMSjpXqkgWPDxmSPFc+RShdjjQk0WY2fFmbqfylk2tmn2Lhq48uJW7tT6wbpe4dBfunNy6bEceR82Ih8d78fU7boOpPXr9Jnuy3Hsy91hPd7MoGJWX/ANQW1++uQmmzA5L3H0jdH9YrLhh+Xjyrr5VykXeVd/ZK0AUAVgPAg1X0kHeSKHeUO8HeUO00PpkIoSsiEIQFCEJARRxQEYo4oCiMcRMCJhcIpApExkyJgRJiJg0iTIpMZAxkyBgJjIEyTXKj9jAZkGMwT8UzlyFyZVpq5ZGK1NTwnNkbES+RjQ9Ynn+clunT6f8AXXZj+z5/dYFX4eU+bWXbnuNGqAv4UL+01v7cRotQzMWpziDX1JPL5bvpMrpwWsDz5eYln7Meunt4rxVnwpptPexLOVwvMufwKbNADr5mVdmuHE5lJ9VVdm59fRIC/G6nu1mpxYcWLIV3NmFZFRRzzgdSegBAv33Odg44uPc1HJkINYsIZkxivxN4tLu61Idb7eXiiZtGcdNak4yGHJu8Sj08CPuZ9F4PxRdXiXJjI3VWRfFHrny8p8r1GXU6lt74cu0eqBjJVR4m/E+2dbs7sB7wanLp+76uMdJR/D63O/Kbyx678ue5fDSa01qcvmUQn2mzzlDNPRoeGZc75c2Ng6s2PHuYlTuPs58hclxXhx0+IZMjgk5e72oLAFMdxP8Ad6VMRXPdpS7STNKHM0r6tCEIYEUIQCKOKARGOKQKIxxGAjImMyJMBGIwJkSYATIkwJkCZAmaRJgZmuKdpzgzthGFX216W5lPTp5SLJb4aJjOdxbiq6ZFfIGYE7aWr6e3lIcO4x33XDt5XyyX9pnO2PEmZsWn2qiszOXLEnkOnSpJZbpv6dnl29J2hxZeSpmB9vd/5p6eJaxcWMsVL2KCWgsnoCbqZHg+Ndw5qfaCOs73aJAcBBUEMACbFbT1k326X45pjNE6M25QwvnRA5A/GbfhrjuSPR6eINfH0piuFs5VPSWqAWxz2+H0m74S5OJgStVz9E85Pk8t4zpx+J3/AOGOQRQ1NHaKUemlcpxdANqlm6Fqnb4rmKcKzV6v7aqL8SpP1nD0N5AeQJD2C1sB7Qvn750/y5T8q53H9SdmJT/tMhzgdNqKndr9d09fCszGq23VeuB0+M5naDKe9xA3+7xLj3EUGNkkjz5muXlOrw1ce1W7yiRzFf6S5dYxMLvOtXjy3hXcUU8hZyLz+F3MoVxpjynHTg6h0SuagLzLfH7TS6VwcBADZGAsBUS/ixEx+n6ZV27NuUsEsEKrDl05eBmcPbWXl9D7IawDC1+GfTMfYr+iT8xDtK+9dUvjgyI4HsV9jH5ZAZxOC5SMeZRyJwBh/Njpx9A07uoIy6kN0TW6dSfK8mPY3yYfSWMWdsphfqh/D0/kPT9InMqy2rKTyIJxuPI9PoRJMZofXIR/11hymdsaKKSoQof0Y2aRhJUP6MK/q42aqBik6H9GU6nPjxLuysEWwtsaFnoI5Q41KImUJxDA3q5Fb3Opi1fEMGFTkzNsQcybvl7hZjlDjVxMiZgcXa/Uu7d2+FsZY92XxFWOO/RvmOdVNLoOJPkQs7YQa8A36yXKTy3Piye3W6/Dh299kXHu9UtdH4xYdfhyf2eVG9xufPe0fE8uTUbGexjvYAAgUEDx8fGe/gOV9w9Ounjf3kuWptrH4ttP2g4omnwZGbJ3bbaxnnfeH1frMroOP6tyA2YeRsY2lvbp7w0Xv0l9ah0N9fhOPoHUkFaX/wCxj+Yk3vHbeGEl03ZzZDh3WN1WWBT8p87XM2TLlfKzO4yspY+IAFeXKbvAy9xW9Qf959phcKAZs4Lsv7zdXosGsdRJheq1cdWNX2eyCq5Dl/FlEz/a4XqcVkDm3pEtfQ8uo5fpNJ2eAP4mPLyUfmZwe2a1nw0K9L1uRPTxrzjC/cmc6S4NYZeYPMfi8veZ3e0hvT7RR3gLzbpfK6+Mz/CcihhZPh1Cj/lmi4+6nTcz4DmKX6hRJ7avhiuHEpScrQnGw3Eekpo8vhN1wh92JhRuvB2r5XMPoKDOr7rGTIDTI3Pebs2LPt8ZuuBle7NM3Tw7r9Zfk8pj+Mc3W4kycM1mNzRwagZr6AXsK/ce8zLYtSyqVRaAqyvpM18gvsuazPp3y6DiWIVvZ8ZUdTVr1bpXI9JnVx49LjXGNr5yaAHOsvQfAeM1j4c7+Tncd4cFGdu83nA+lxueqjNmUs6r7Ab+slwvApq9nv3L96MhqxeBcZajmznOxNn0UBRSfiWM6HD0yrQvC3kxJ6f17JvK/amE1lt39BgxJhZmCtS8gHFk+65g9RqmOdu7Xmxo35Xc3WvyZhpvRfbuBsIGVT/eI/KY/g/DmZ3LedX15GZ+PUltPk3bJHe4Pqgrq/gndlh5jo4+IJE1A0ZGFF8dPlfGreJxOdyH8/8AFK+y/AsRD5nXcrDu1UgFCFItvfO+NMAxx9FdNq+wr6vy6fCYuXXR7YHtJi/eOw5DKBnodAx9cf4g3znPR7UH2fWavtHod+A5APSxFiw8lJ2uPgwB+JlXYXDiyYsyZMeN2x5FYFlBOxh0+an5zcy3jss03kKni1mDUM14syItAbGwh/S8TusH4RYNNnH9pkxsPZjZf+aZ2mv69WfMuNS+RwiKLZmICqLrmfjPOvEsJ9XKjeVOhv6zycY4O+oQ4/2jJiQ+umNUrIt+qxIJr3ETl6bsfjQ8nP8AgH6yXLTUxl81on1qAWTQ96/rMrqO2p75006JmxAhVyW6GwBuB9E9DfOaA8JTuwnPy3AC5n8XYjFjJ7vNmALFiGXG/M+RqTl+1mOO3V0HGcmUc8YX3Zf+mZfttxnOz4tMyr3ORixFbsm5RYpiPtNZw3g3ddMhb341nk4x2Vw6l0yZHyq+MkqUKqOYrpUmOV9tXHH0zPBiligw6fhxV86nd7Sj/wAq4uvQPRl/hPLkB+cv0vZhUN99nPvK/pOpquFJkx93kZ3UiquvtM+9tXKPl/Bd2xBS9AL9IWfHx5zfcHVjjJ/dnl42T+c82DsZpkoIcwA6Df0+k7Gi4OmMUpyVXixlyu70kusZHzbjGQrrGABYkXVHpQHh7RO9wHUAsLxn37TOxr+yemy5e+/eI+3ZasCCLvmCCL9sv0XZ1MZtcuQ+9cX+WW2XRLrbP9v03YdygKwK0TQ8QOpPTnOPw0Py9JgDRAKuRVe8z6DxbgeHUYzjz7nUijRGM/MCc7D2TwLQR84A5D94D9o5fboxvezwvkOA8xVHz6e6fOxkUajPur+0/hU86n1rFwxFTZucj2kX+U5B7IaPc7KuVS5tv3rEX5gHpGN472lstmnM7N6nH4gf4R/mnK7a7e8xOL2K67tvohRYFmj5kD3kTccP4JixVt3n+ZgftK+K9nNNqa75HYgggjK6cx5gciPZGNkuzK76YnhmTGCptr5XuLfpNHx3IG0poH1eXVgeXunsw9ltMhsbwR/8gftOjl4VhKbGUlSKoHZy94oye2uUfKeEY9yg2jG23Nt3bm3GyD4ibjgeM7WoqDXgrfSWp2L0S+ouVBd0MrN+dzq6HgmLEKQ5B72B+0uV5XpMbJjJXD4a42axcm4emobnuvGVrp4cwZltVpcOFUGBMj5huvK5Jq+Q5+fjPow4Lp/S9Frbqd7A/SeU9nNP4HKP79/nEunLLe9x86w6Pe27JYoBVABpQOgHn8p2MOJF50xHgSdv3msfs/iP48vyTyrykH7MoRXeOPcAD87i5bWZWemeyA5FJYjai2BbG+Y5czyNX7JnhrgMjY8SEAkd3uI3Ueobz8ZvG7JoQR3jn3i55svZDrsyInu06X85qZRneW3b7O6kPgFlVCMUS6BKgT3avHa7kILJ6S0RzrqJwdN2dyqoX9osAUP3YEtHAcv/ALg/Bf8AWTXSvTmyIWvkcecdD07yqZD/ADD6rOX2Y4Tk0+r1Qo9y2Je7yeDemCF/mAuevS8AyJl7z9oYj+AoCu7+Kj4zvKpAr7VJOltml9wuKBm2DLRXFHAe6RMcICBiYyQgZFVgmSYmOMyG1FmTVjJSQiRbXnYRr7vpLoLJo5Kn/rlK6nrMiYuJMlQ6SH9dJ6x0kDHE5KcZPl9JHJ16fSetYjHE5PGoPkflLHuvH5S8STRx6OTw+l7flLsd+NyyTWJjqlyUivbEAJdIiVNq9ohylhlRhYly85A1IGQPWTa6ehakqHtlSyayxmpbR5mArzhISj//2Q==" --}}
                     {{-- alt="Inspection" --}}
                     {{-- class="w-full rounded-lg"> --}}
            </div>

            <!-- MEB -->
            <div id="meb" class="bg-white rounded-lg shadow-lg p-6">
                <h6 class="text-xl font-semibold text-gray-800 mb-4">
                    {{ __('messages.madb_title') }}

                </h6>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.madb1') }}
                </p>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.madb2') }}
                </p>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.madb3') }}
                </p>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.madb4') }}
                </p
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.madb5') }}
                </p>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.madb6') }}
                </p>
                <p class="text-gray-600 mb-4 leading-8">
                    {{ __('messages.madb7') }}
                </p>

            </div>





    </div>

    <!-- Optional: Add some CSS for better scrolling experience -->
    <style>
        .section {
            scroll-margin-top: 100px;
        }

        /* Optional: Style for active nav links */
        nav a.active {
            background-color: rgba(239, 68, 68, 0.1); /* red-100 */
        }

    </style>
</x-app-layout>
1
