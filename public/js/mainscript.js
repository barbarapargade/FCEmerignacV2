function ArticleCategory(category, id) {
    $.ajax(
        {
            url: "",
            type: "GET",
            data: {
                'category': category,
            },
            success: function (data) {
                img = "/uploads/" + data.image;
                href = "{" + "{ path('article_slug','slug':" + data.slug + ") | urlFromJs }}"
                $("#titre" + id).html(data.titre)
                $("#imagearticlecat" + id).attr('src', "https://www.fce-merignac-arlac.fr" + img);
                $("#lienArticle" + id).attr('href', "https://www.fce-merignac-arlac.fr/actualité/" + data.slug)
                dateafiichage = new Date(data.dateArticle.date);
                $("#date" + id).html(dateafiichage.getDate() + "/" + (dateafiichage.getMonth() + 1) + "/" + dateafiichage.getFullYear())
            }
        }
    )
}