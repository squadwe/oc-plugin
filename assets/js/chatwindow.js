(function(d,t) {
    var BASE_URL = "{{ baseUrl }}";
    var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src= BASE_URL + "/packs/js/sdk.js";
    s.parentNode.insertBefore(g,s);
    g.onload=function(){
        window.squadwe.run({
            websiteToken: '{{ websiteToken }}',
            baseUrl: BASE_URL
        })
    }

    window.squadweSettings = {
        type: '{{ type }}',
        launcherTitle: '{{ launcherTitle }}',
        locale: '{{ locale }}',
        position: '{{ position }}',
        showPopoutButton: {{ showPopoutButton }}
    }

    window.addEventListener('squadwe:ready', function () {
        {% if setUser %}
        window.$squadwe.setUser('{{ userId }}', {
            email: '{{ userEmail }}',
            name: '{{ userName }}',
            avatar_url: '{{ userAvatarUrl }}',
        });
        {% endif %}

        $('[data-squadwe-trigger]').on('click', function () {
            window.$squadwe.toggle();
        });
    });
})(document,"script");