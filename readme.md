<h1>HỆ THỐNG GỢI Ý CHỌN NHÂN VẬT (TƯỚNG) TRONG TỰA GAME **LIÊN MINH HUYỀN THOẠI**</h1>

<h3>Thuật toán đề xuất: collaborative filtering (phương pháp lọc cộng tác)</h3>

<p><ins>Lưu ý:</ins> Mã nguồn này là của **TrHgTung** và các thành viên khác trong nhóm cùng phát triển, những người không liên quan không được phép khai thác mã nguồn này.</p>

<ins>To-do</ins>: Cần xây dựng lại giao diện (<ins>front-end</ins>) và <ins>Việt hóa </ins>lại giao diện.

<ins>Yêu cầu đặt ra:</ins>

> Chúng ta lấy giả thiết rằng có một số lượng người chơi **_Liên minh huyền thoại_** đang cần một hệ thống có thể tự động cập nhật các đề xuất về xu hướng các tướng đáng để chọn và mang vào trận đấu, bẳng cách tổng hợp và xử lí dữ liệu của các con tướng (đánh giá bằng số trận thắng) từ những người chơi cũ (dữ liệu từ quá khứ)

- Đầu tiên, chúng ta cần một số lượng đông đảo người chơi đề cử cho những con tướng và tổng số trận thắng của từng con tướng mà họ từng dùng để đấu;

    + Ví dụ: Một người chơi tham gia khảo sát tên là <kbd>user1</kbd> đã thực hiện khảo sát cho rằng anh ta đã chơi `Yasuo` với tổng số trận thắng là 80. Và <kbd>user2</kbd> đã chơi `Vayne` (~~không đi top~~) với số trận thắng 34.
    + Nhưng ngược lại, với <kbd>user1</kbd>, số trận thắng khi cầm `Vayne` chỉ là 10 trận, trong khi với con bài `Yasuo` trong tay, <kbd>user2</kbd> có cho mình tận 65 trận thắng
    
    => Qua đó sẽ gợi ý cho các người chơi khác rằng `Yasuo` là con tướng đáng để chọn đem vào trận hơn là dùng `Vayne`. Và chỉ khi các dữ liệu thay đổi về số lượng người chơi được khảo sát hay số lượng trận thắng của các trường hợp thì tỉ lệ đề xuất cũng thay đổi theo. Tất cả sẽ được báo cáo ở mỗi phân trang hiển thị của từng người chơi được khảo sát (với tỉ lệ được sắp xếp thấp dần)

- Các tính năng khả dụng:

    + Giao diện truy cập lúc ban đầu sẽ trông như phía dưới:

    ![alt text](https://github.com/TrHgTung/recommended-system-demo-beta/blob/main/product_displayed/home_index.jpg?raw=true)

    + Tạo mới tên người chơi: chỉ được chỉ định bởi người quản trị (admin), tính năng cho phép thêm tên người chơi LMHT được khảo sát lấy dữ kiện

    ![alt text](https://github.com/TrHgTung/recommended-system-demo-beta/blob/main/product_displayed/login_as_admin.jpg?raw=true)

    ![alt text](https://github.com/TrHgTung/recommended-system-demo-beta/blob/main/product_displayed/add_new_player.jpg?raw=true)

    + Tương ứng với mỗi người chơi, cho phép thêm các dữ kiện về `tên tướng`, `tổng số trận thắng với chính con tướng này`, và đây là dữ liệu được mỗi người chơi tương ứng cung cấp cho CSDL

    ![alt text](https://github.com/TrHgTung/recommended-system-demo-beta/blob/main/product_displayed/add_items_1.jpg?raw=true)
    ![alt text](https://github.com/TrHgTung/recommended-system-demo-beta/blob/main/product_displayed/add_items_2.jpg?raw=true)
    ![alt text](https://github.com/TrHgTung/recommended-system-demo-beta/blob/main/product_displayed/add_items_3.jpg?raw=true)

    + Xem danh sách: xem lại toàn bộ thông tin đã cung cấp bởi những người chơi

    ![alt text](https://github.com/TrHgTung/recommended-system-demo-beta/blob/main/product_displayed/history_view.jpg?raw=true)

    + Xem đề xuất: là **tính năng chính**, hiển thị tỉ lệ khuyến nghị cho bạn chọn từng con tướng, và đã được sắp xếp theo thứ tự giảm dần từ trên xuống. Vì thế ở mỗi bản báo cáo từ những người chơi cung cấp, bạn nên chọn cho mình những con ở các vị trí đầu tiên, vì có thể chúng đang meta.

    ![alt text](https://github.com/TrHgTung/recommended-system-demo-beta/blob/main/product_displayed/recommend_result.jpg?raw=true)

> Chưa phải là hình ảnh cuối cùng

- Những gì được áp dụng vào dự án này:
    
    + Front-end: BootstrapCSS v5.3

    + Back-end: PHP/MySQL

- Cách khởi chạy trên localhost:

    ```
    1. Cài đặt một hệ máy chủ ảo (Apache XAMPP)
    2. Cài đặt một hệ quản trị CSDL (MySQL)
    3. Cài đặt PHP (PHP v8.1.12)
    4. Có sẵn một trình duyệt đời mới (khuyến nghị sử dụng mã nguồn Chromnium-based)
    ```

- Hệ thống này sử dụng **collaborative filtering** (phương pháp lọc cộng tác), tham khảo: https://viblo.asia/p/xay-dung-mot-he-thong-goi-y-collaborative-filtering-de-dang-nhu-the-nao-GrLZDXv3Zk0

- Ngoài ra còn có các nguồn khác để tham khảo các học thuật đề xuất dữ liệu, cũng như chính thuật toán lọc cộng tác này:
    + https://github.com/TrHgTung/recommender_system_with_Python/blob/master/003.%20recommender%20system%20basic%20with%20Python%20-%202%20Collaborative%20Filtering.ipynb [github@lsjsj92]

    + https://phamdinhkhanh.github.io/2019/11/04/Recommendation_Compound_Part1.html