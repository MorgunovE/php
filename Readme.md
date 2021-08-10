1. down https://github.com/laravel/laravel or https://laravel.su/docs/8.x/installation
2. php artisan serve
3. delete index.php
4. composer upgrade
5. php artisan serve on phpstorm or php 7.4
6. change enp.example to env
7. php artisan key:generate
8. php artisan route:list
9. add route in routes web.php
10. php artisan route:list
11. resources views welcome.blade.php
12. add hello.blade.php
13. add route
14. add test blade
15. add route
16. add layouts and app blade
17. add extends in app hello
18. add components
19. create navber blade php
20. include navbar in app blade php
21. add [] in route
22. add $ in hello blade php {{}} 
23. add params in route
24. add foreach in hello with skills
25. add if in hello blade
26. controllers = app http controllers
27. php artisan make:controller PagesController
28. add function in PagesController
29. add function controller in web
30. in env mysql database + config database
31. add todos in web and controllers and views
32. database migrations
33. php artisan make:migration create_todos_table
34. add parameters table
35. php artisan migrate
36. if add something in database php artisan migrate:refresh
37. php artisan make:model Todo
38. model = app Models
39. add code in PagesController for model for saving
40. add new code in PagesController for model for saving
41. add code in model Todo for saving
42. add code for list in todos blade
43. add code for list in PagesController
44. add code for list todo blade
45. add change list in PagesController
46. delete list el in PagesController
47. add a in todos
48. add pages done and not_done in web
49. add methods done and not_done in PagesController
50. add mysql in todos blade
51. add model and migration = php artisan make:model Hack -m
52. add Articles blade
53. add Articles in web
54. add blogPage in PagesController
55. add list in blog blade
56. add model and migration = php artisan make:model Article -m
57. php artisan migrate:refresh
58. add code list in PagesController
59. add list in blog blade
60. add route in web
61 add articlePage in PagesController
62. add article blade
63. php artisan make:model Comment -m
64. php artisan migrate
65. add list in article blade
66. add comments in PagesController
67. add foreach in article blade
68. add method comments in article model
69. add comments in PagesController
70. add article comments in article blade
71. add form in blog blade
72. add post route in web
73 add controller php artisan make:controller ArticleController
74. add method in ArticleController
75. add controller ArticleController in web
76. add csrf in blog blade for token
77. add Request in ArticleController
78. add fields in article model
79. add button in blog blade
80. add /article/delete in web
81. add destroy in ArticleController
82. add change article in blog blade
83. /article/{{$article->id}}/update in web
84. add articleUpdatePage in PagesController
85. add article_update.blade.php
86. add form in article_update.blade.php
87. add /article/update in web
88. add method update in ArticleController
89. add name for route name('article') in web
90. script for ajax in blog blade
91. add meta in app blade in layout
92. add token in script for ajax in blog blade
93. auth
94. for auth composer require laravel/ui
95. php artisan ui vue --auth
96. npm install && npm run dev normal with error on dev because sudo
97. php artisan migrate
98. php artisan route:list
99. auth = app http controllers auth
100. resources views auth register
101. add method in REgisterController to change page
102. add new input in register blade
103. add new input in migration users
104. php artisan migrate:refresh
105. add input in registerCOntroler
106. add input in User Model
107. add method enter in loginCOntroller from AuthentificatorUsers
108. change email to login in login blade
109. logout in layouts app blade
110. add test blade
111. add controller php artisan make:controller PagesController but he existed right now
112. add test in web add middleware
113. for user information auth user in test blade
114. for user information add code in PagesController
115. add useer in test blade
116. change home to test page in loginCOntrollers RouteServiceProvider
117. copy gome to admin
118. add route in web
119. add method for admin in PagesController
120. add group in migration users
121. php artisan migrate:refresh
122. add middleware in route
123. php artisan make:middleware AdminMiddleware = app http middleware
124. add auth in AdminMiddleware
125. add group in models User
126. register middleware in Kernel
127. change auth to admin in web
128. php artisan make:model Article -m but it has
129. add content in migration
130. add content in Article model
131. php artisan migrate or php artisan migrate:refresh
132. api route has url/api/url
133. app providers RouteServiceProvider prefix api
134. add route in api
135. php artisan make:controller Api/ArticlesController
136. add controller in api
137. add method showArticles in controllers ArticlesController 
138. install local postman
139. http://127.0.0.1:8000//api/articles
140. add response in ArticlesController
141. get 1 post with id add route in api
142. add showArticle in ArticlesController
143. add card in art
144. add jquery in art blade
145. add ajax in art blade
146. add post in api
147. add storeArticle in ArticlesController
148. use Validator in ArticlesController
149. add code for form in art blade
150. add function for send in art blade
151. add errors in art blade
152. add PUT method in api
153. add putArticle in ArticlesController
154. add path in api
155. add patchArticle in ArticlesController
156. add modal in art blade
157. add bootstrap from https://www.jsdelivr.com/package/npm/bootstrap?path=dist in art blade
158. add method for fields in art blade and in button
159. add hidden for fields in art blade
160. add updateArticle in art blade
161. add on button updateArticle in art blade
162. add loadArticles in art blade
163. add route delete in api
164. add deleteArticle in ArticlesController
165. add delete button 
166. add deleteArticle in art blade
167. php artisan make:controller ArtController --resource
168. add resource method in api
169. php artisan route:list
170. add params in store in ArtController
171. add params in show in ArtControlle
172. add params in update in ArtControlle
173. add params in delete in ArtControlle
174. add api recources in api only for operation
175. change params in index in ArtController
176. php artisan make:resource Article = http/resources
177. add params in array in resource Article
178. add resource Article in ArtController
179. add ArticleResource in show in ArtController
180. php artisan make:resource ArticleCollection
181. add ArticleCollection in ArtController
182. php artisan make:resource Comment
183. php artisan make:resource CommentCollection
184. change params in resource Comment
185. change params in resource Article
186. add token in user migration
187. php artisan migrate:refresh
188. php artisan make:controller UserController
189. add register method in UserController
190. add token in User model
191. add post in api
192. add login in UserController
193. add login in api
194. add test route in api
195. php artisan make:middleware BearerAuth
196. add method in BearerAuth
197. add BearerAuth in Kernel
198. add middleware in api
199. add construct in ArtController
200. add function in welcome view
201. 52-39
