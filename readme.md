* �̼�ע��ʱ��ͬ����д�̼���Ϣ���̼��˺ź�����
* �̼�ע�����Ҫƽ̨���ͨ�����˺Ų���ʹ��
* ƽ̨����ֱ������̼���Ϣ���˻���Ĭ�������ͨ��
ʵ�ֲ���
1. composer create-project --prefer-dist laravel/laravel ele "5.5.*" -vvv
2. ������������ ��������
3. �ѻ�������
4. �������ݿ�ele
5. ����.env�ļ� ���ݿ����
6. �������԰�
7. ����Ǩ��
8. ������ php artisan make:model Models/ShopCategory -m
9. ׼���û���ģ��
10. ���� ������ php artisan make:controller Admin/ShopCategoryController
11. ������ͼ ��ͼҲҪ��ģ��
12. ·����Ҫ����
�̼ҷ����shop_categories
�ֶ�����������עidprimary����namestring��������imgstring����ͼƬstatusint״̬��1��ʾ��0�����̼���Ϣ��shops
�ֶ�����������עidprimary����shop_category_idint���̷���IDshop_namestring����shop_imgstring����ͼƬshop_ratingfloat����brandboolean�Ƿ���Ʒ��on_timeboolean�Ƿ�׼ʱ�ʹ�fengniaoboolean�Ƿ��������baoboolean�Ƿ񱣱��piaoboolean�Ƿ�Ʊ���zhunboolean�Ƿ�׼���start_sendfloat���ͽ��send_costfloat���ͷ�noticestring�깫��discountstring�Ż���Ϣstatusint״̬:1����,0�����,-1�����̼��˺ű�users
�ֶ�����������עidprimary����namestring����emailemail����passwordstring����remember_tokenstringtokenstatusint״̬��1���ã�0����shop_idint�����̼�
