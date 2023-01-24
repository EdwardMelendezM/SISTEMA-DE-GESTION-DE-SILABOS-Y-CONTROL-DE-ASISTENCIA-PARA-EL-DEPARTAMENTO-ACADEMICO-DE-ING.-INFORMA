SELECT title,category,country,premiere,status
        FROM movieseries
        WHERE category='movie' AND country LIKE 'USA%'
        ORDER BY premiere;
        
SELECT title,category,country,genres,premiere,status
        FROM movieseries
        WHERE genres LIKE '%drama%' /*Cualquier fla con esa palabra*/
        ORDER BY premiere;

SELECT ms.title, ms.category, ms.country, ms.genres, ms.premiere, s.status
        FROM movieseries as ms INNER JOIN status AS s ON ms.status=s.status_id
        WHERE s.status='Release' OR s.status='Finished'
        ORDER BY ms.premiere;

SELECT ms.title,ms.category,ms.country,ms.premiere,s.status
        FROM movieseries AS ms INNER JOIN status AS s ON ms.status=s.status_id
        WHERE MATCH(ms.title,ms.author,ms.actors,ms.genres)
        AGAINST('drama' IN BOOLEAN MODE);
