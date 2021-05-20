<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>顧客管理</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap">
        <link rel="stylesheet" href="https://getbootstrap.jp/docs/4.5/examples/album/album.css">
        <link rel="stylesheet" href="https://getbootstrap.jp/docs/4.5/examples/example.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    </head>

    <body>
        <header>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="index.html" class="navbar-brand d-flex align-items-center">
                        <strong>顧客管理</strong>
                    </a>
                </div>
            </div>
        </header>

        <main role="main">
            <div class="container-fluid" style="padding-left: 50px;padding-right: 50px;">
                <div class="py-5 text-center">
                    <div class="alert alert-success" role="alert">
                        【メッセージサンプル】登録しました。
                    </div>

                    <div style="margin-bottom:20px;">
                        <form id="form" method="post" action="index.html">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="lastKana" class="col-sm-2 col-form-label">姓かな</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="last_kana" placeholder="姓かな">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstKana" class="col-sm-2 col-form-label">名かな</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="first_kana" placeholder="名かな">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="firstName" class="col-sm-2 col-form-label">性別</label>
                                        <div class="col-sm-10 text-left">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="gender1" value="1">
                                                <label class="form-check-label" for="inlineCheckbox1">男</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="gender2" value="2">
                                                <label class="form-check-label" for="inlineCheckbox2">女</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prefId" class="col-sm-2 col-form-label">都道府県</label>
                                        <div class="col-sm-3">
                                            <select class="custom-select d-block" name="pref_id">
                                                <option value=""></option>
                                                <option value="1">北海道</option>
                                                <option value="2">青森県</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="form-group">
                            <button type="button" id="search" class="btn btn-primary" style="width:150px"><i class="fas fa-search pr-1"></i> 検索</button>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            【メッセージサンプル】該当データが見つかりません。
                        </div>
                        <div class="form-group row">
                            <a  class="btn btn-success" href="create.html" style="width:150px"><i class="fas fa-chalkboard-teacher pr-1"></i> 新規登録</a>
                        </div>
                    </div>

                    <div class="row">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">名前</th>
                                    <th scope="col">かな</th>
                                    <th scope="col">性別</th>
                                    <th scope="col">生年月日</th>
                                    <th scope="col">郵便番号</th>
                                    <th scope="col">都道府県</th>
                                    <th scope="col">電話番号</th>
                                    <th scope="col">携帯番号</th>
                                    <th scope="col">メールアドレス</th>
                                    <th scope="col">作成日時</th>
                                    <th scope="col">更新日時</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="content">
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col"><a href="detail.html">苗字　名前</a></td>
                                    <td scope="col">みょうじ なまえ</td>
                                    <td scope="col">男</td>
                                    <td scope="col">1973/01/24</td>
                                    <td scope="col">123-4567</td>
                                    <td scope="col">青森県</td>
                                    <td scope="col">03-1234-5678</td>
                                    <td scope="col">080-1234-5678</td>
                                    <td scope="col">bobtabo.buhibuhi@gmail.com</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col">2020/08/30　23：12：34</td>
                                    <td scope="col"><a class="btn btn-info" href="edit.html">編集</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

        <script>
            $("#search").click(function() {
                $("form").submit();
            });
        </script>
    </body>
</html>
