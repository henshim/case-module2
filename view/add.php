<?php

if (isset($message)) {
    echo '<p class="alert-info">$message</p>';
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Đặt sân </h1>
        </div>
        <div class="col-12">
            <form action="" method="post">
                <div class="form-group">
                    <label>Tên khách hàng</label>
                    <input type="text"
                           class="form-control"
                           name="ten"
                           placeholder="Nhập tên khách" required>
                </div>
                <div class="form-group">
                    <label>Chọn sân</label>
                    <select name="ma_san" id="">
                        <option value="san_1">san 1</option>
                        <option value="san 2">san 2</option>
                        <option value="san 3">san 3</option>
                        <option value="san 4">san 4</option>
                        <option value="san 5">san 5</option>
                        <option value="san 6">san 6</option>
                        <option value="san 7">san 7</option>
                        <option value="san 8">san 8</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ngày đặt </label>
                    <input type="date"><br>
                    <label>start</label>
                    giờ<select name="bat_dau" id="">
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                    phút <select name="bat_dau" id="">
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select><br>
                    <label>end</label>
                    giờ <select name="ket_thuc" id="">
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                    phút<select name="ket_thuc" id="">
                        <option value="15">15</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Đặt </button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">cancel</button>
            </form>
        </div>
    </div>
</div>