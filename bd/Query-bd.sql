/*
Movieseries
/*
        /*Crear movieseries*/
        INSERT INTO movieseries SET imdb_id = 'tt3749900', title = 'Gotam', plot = '',
                author = '', actors = '', country = '', premiere = '2014', trailer = '',
                poster = '', rating = 8.0, genres = 'Crime, Drama, Thriller',
                category = 'Serie', status  = 3;

        /*Actualizar movieseries*/
        UPDATE movieseries SET title = 'Gotham', plot = 'In crime ridden Gotham City,
        Thomas and Martha Wayne are murdered before young Bruce Wayne\'s eyes. Although
        the idealistic Gotham City Police Dept. detective James Gordon, and his cynical
        partner, Harvey Bullock, seem to solve the case quickly, things are not so simple.
        Inspired by Bruce\'s traumatized desire for justice, Gordon vows to find it amid
        Gotham\'s corruption. Thus begins Gordon\'s lonely quest that would set him against
        his own comrades and the underworld with their own deadly rivalries and mysteries.
        In the coming wars, innocence will be lost and compromises will be made as some
        criminals will fall as casualties while others will rise as supervillains. All
        the while, young Bruce observes this war with a growing obsession that would one
        day drive him to seek his own revenge as The Batman.',
        genres = 'Crime, Drama,
        Thriller', author = 'Bruno Heller',
        actors = 'Zabryna Guevara, Ben McKenzie Donal Logue, David Mazouz',
        country = 'USA', premiere = '2014',
        trailer = 'https://www.youtube.com/watch?v=_axxvmMBgQk',
        poster = 'http://ia.media-imdb.com/images/M/MV5BMTQ1ODk3NDczNF5BMl5BanBnXkFtZTgwODE5MDQ4NjE@._V1_SX300.jpg',
        rating = 8.0, category = 'Serie', status  = 3 
        WHERE imdb_id = 'tt3749900';
        
        /*Eliminar Movieseries*/
        DELETE FROM Movieseries WHERE imdb_id = 'tt3749900';

        /*Buscar todas las movieseries*/
        SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
                ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.status
                FROM  movieseries AS ms INNER JOIN 
                status AS s ON ms.status=s.status_id;

        /*Buscar una movieseries por titulo,personas(actores,autores),generos*/
        SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
                ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.status
                FROM  movieseries AS ms INNER JOIN 
                status AS s ON ms.status=s.status_id
                WHERE MATCH(ms.title,ms.actors,ms.author,ms.genres)
                AGAINST('Drama' IN BOOLEAN MODE);
        
        /*Buscar una movieseries por categoria*/
        SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
                ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.status
                FROM  movieseries AS ms INNER JOIN 
                status AS s ON ms.status=s.status_id
                WHERE ms.category='Movie';
        /*Busar una movieseries por status*/
        SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
                ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.status
                FROM  movieseries AS ms INNER JOIN 
                status AS s ON ms.status=s.status_id
                WHERE ms.status=1;
/*
STATUS
*/
        /*Crear status*/
        INSERT INTO status SET status_id='6', status='Otros';

        /*Actualizar status*/
        UPDATE status SET status_id='7', status='Otros de nuevo' WHERE status_id=2;

        /*Salvar status*/
        REPLACE INTO status (status_id,status) VALUES (0,'Otro status');
        REPLACE status SET status_id=0,status='Otro status';


        /*Eliminar status*/
        DELETE FROM status WHERE status_id=9;

        /*BUscar Todos los status*/
        SELECT * FROM status;
        /*Buscar un status por status_id*/
        SELECT * FROM status WHERE status_id=3;
/*
USER
*/
        /*Crear user*/
        INSERT INTO users SET user='@usuario',email='usuario@midominio.com',name='Usuario nuevo',
                        birth='1988-10-09', pass=MD5('un_password'),role='Admin';
        REPLACE user SET user='@usuario',email='usuario@midominio.com',name='Usuario nuevo',
                        birth='1988-10-09', pass=MD5('un_password'),role='Admin';

        /*Actualiar*/

                /*Datos Personales*/
                UPDATE users SET user="@soy_un_usuario" name='Usuario nuevo', email='usuario@midominio.com',
                        birth='1988-10-09',role='Admin'
                        WHERE user='@usuario' AND email='usuario@gmail.com'

                /*Password*/
                UPDATE users SET pass=MD5('un_password') 
                        WHERE user='@usuario' AND email='usuario@gmail.com'

        /*Eliminar user*/
        DELETE FROM users WHERE user='@usuario'

        /*Buscar todos los users*/
        SELECT * FROM users;

        /*Buscar user por user por :*/
                /*User*/
                SELECT * FROM WHERE user='@usuario';
                /*Email*/
                SELECT * FROM WHERE email='usuariogaaa@usuario.com';
                /*Role*/
                SELECT * FROM WHERE rol='User';