drop table if exists sp16_news;

CREATE TABLE sp16_news (
        id int(11) NOT NULL AUTO_INCREMENT,
        title varchar(128) NOT NULL,
        slug varchar(128) NOT NULL,
        text text NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);

insert into sp16_news values(null, 'How long do twinkies last', 'twinkies', 'here is where our articles about twinkies go');
insert into sp16_news values(null, 'How many calories can one cookie have', 'oreos', 'here is where our articles about oreos go');
insert into sp16_news values(null, 'Paid shill teaches IT classes, nabisco stock triples', 'shill', 'here is where our articles about shills go');