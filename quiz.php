<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>三択クイズ</title>
</head>
<body>
<h1>三択クイズ</h1>
<hr>
<h2>問題</h2>
<div id="text_q"></div>
<h2>選択</h2>
<div id="text_s"></div>
<h2>解答</h2>
<div id="text_a"></div>

<script type="text/javascript">
//問題と解答
qa = new Array();
qa[0] = ["イルカを漢字で書くとどれ？", "海豚", "海牛", "河豚", 1];
qa[1] = ["クラゲを漢字で書くとどれ？", "海豚", "海牛", "河豚", 2];

//初期設定
count = 0;
q_set = 3;

quiz();

function quiz() {
    var s, n;
    document.getElementById("text_q").innerHTML = (count + 1) + "問目: " + qa[count][0];
    s = "";
    for(n = 1; n <= q_sel; n++) {
        s += "[<a href=''>" + n + " : " + qa[count][n] + "</a>]";
    }
    document.getElementById("text_s").innerHTML = s;
}

</script>
</body>
</html>
