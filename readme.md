<h1>HỆ THỐNG GỢI Ý CHỌN NHÂN VẬT (TƯỚNG) TRONG TỰA GAME **LIÊN MINH HUYỀN THOẠI**</h1>

<h3>Thuật toán đề xuất: collaborative filtering (phương pháp lọc cộng tác)</h3>
> Mã nguồn này là của TrHgTung và các thành viên khác trong nhóm cùng phát triển, những người không liên quan không được phép khai thác mã nguồn này.
<h1>___________________________________________________</h1>

<ins>To-do</ins>: Cần xây dựng lại giao diện (<ins>front-end</ins>) và <ins>Việt hóa </ins>lại giao diện.

<ins>Yêu cầu đặt ra:</ins>
Chúng ta lấy giả thiết rằng có một số lượng người chơi **_Liên minh huyền thoại_** đang cần một hệ thống có thể tự động cập nhật các đề xuất về xu hướng các tướng đáng để chọn và mang vào trận đấu, bẳng cách tổng hợp và xử lí dữ liệu của các con tướng (đánh giá bằng số lượng trận mà từng người đã chọn) từ những người chơi cũ (dữ liệu từ quá khứ)

- Đầu tiên, chúng ta cần một số lượng đông đảo người chơi đề cử cho những con tướng và số lưognj trận đấu mà họ dùng chính con tướng này để chơi
    + Ví dụ: Một người chơi tham gia khảo sát tên là <kbd>user1</kbd> đã thực hiện khảo sát cho rằng anh ta đã chơi `Yasuo` trong 10 trận gần đây nhất. Và <kbd>user2</kbd> đã chơi `Vayne` (~~không đi top~~) trong 8 trận gần đây nhất. Qua đó sẽ gợi ý cho các người chơi khác `Yasuo` là con tướng đáng để chọn đem vào trận hơn là dùng `Vayne`

- Hệ thống này sử dụng collaborative filtering (phương pháp lọc cộng tác), tham khảo: https://viblo.asia/p/xay-dung-mot-he-thong-goi-y-collaborative-filtering-de-dang-nhu-the-nao-GrLZDXv3Zk0

- Ngoài ra còn có các nguồn khác để tham khảo các học thuật đề xuất dữ liệu, cũng như thuậ toán lọc cộng tác này:
    + https://github.com/TrHgTung/recommender_system_with_Python/blob/master/003.%20recommender%20system%20basic%20with%20Python%20-%202%20Collaborative%20Filtering.ipynb (github@lsjsj92)
    + https://phamdinhkhanh.github.io/2019/11/04/Recommendation_Compound_Part1.html