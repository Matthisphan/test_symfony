--
-- PostgreSQL database dump
--

-- Dumped from database version 16.2
-- Dumped by pg_dump version 16.2

-- Started on 2024-04-22 21:09:18

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 224 (class 1255 OID 16458)
-- Name: notify_messenger_messages(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.notify_messenger_messages() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
            BEGIN
                PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$;


ALTER FUNCTION public.notify_messenger_messages() OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 215 (class 1259 OID 16431)
-- Name: doctrine_migration_versions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);


ALTER TABLE public.doctrine_migration_versions OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 16484)
-- Name: mark; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.mark (
    id integer NOT NULL,
    student_id integer NOT NULL,
    matiere character varying(255) NOT NULL,
    note double precision NOT NULL,
    coefficient double precision NOT NULL,
    nom_controle character varying(255) NOT NULL
);


ALTER TABLE public.mark OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 16483)
-- Name: mark_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.mark_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.mark_id_seq OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 16446)
-- Name: messenger_messages; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.messenger_messages (
    id bigint NOT NULL,
    body text NOT NULL,
    headers text NOT NULL,
    queue_name character varying(190) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    available_at timestamp(0) without time zone NOT NULL,
    delivered_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE public.messenger_messages OWNER TO postgres;

--
-- TOC entry 4885 (class 0 OID 0)
-- Dependencies: 219
-- Name: COLUMN messenger_messages.created_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.created_at IS '(DC2Type:datetime_immutable)';


--
-- TOC entry 4886 (class 0 OID 0)
-- Dependencies: 219
-- Name: COLUMN messenger_messages.available_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.available_at IS '(DC2Type:datetime_immutable)';


--
-- TOC entry 4887 (class 0 OID 0)
-- Dependencies: 219
-- Name: COLUMN messenger_messages.delivered_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.delivered_at IS '(DC2Type:datetime_immutable)';


--
-- TOC entry 218 (class 1259 OID 16445)
-- Name: messenger_messages_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.messenger_messages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.messenger_messages_id_seq OWNER TO postgres;

--
-- TOC entry 4888 (class 0 OID 0)
-- Dependencies: 218
-- Name: messenger_messages_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.messenger_messages_id_seq OWNED BY public.messenger_messages.id;


--
-- TOC entry 217 (class 1259 OID 16438)
-- Name: student; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.student (
    id integer NOT NULL,
    firstname character varying(255) NOT NULL,
    lastname character varying(255) NOT NULL,
    classe character varying(255) NOT NULL
);


ALTER TABLE public.student OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 16437)
-- Name: student_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.student_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.student_id_seq OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 16461)
-- Name: user; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."user" (
    id integer NOT NULL,
    email character varying(180) NOT NULL,
    roles json NOT NULL,
    password character varying(255) NOT NULL
);


ALTER TABLE public."user" OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 16460)
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.user_id_seq OWNER TO postgres;

--
-- TOC entry 4709 (class 2604 OID 16449)
-- Name: messenger_messages id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages ALTER COLUMN id SET DEFAULT nextval('public.messenger_messages_id_seq'::regclass);


--
-- TOC entry 4871 (class 0 OID 16431)
-- Dependencies: 215
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20240415222741	2024-04-16 00:27:54	72
DoctrineMigrations\\Version20240421100119	2024-04-21 12:03:07	80
DoctrineMigrations\\Version20240421133619	2024-04-21 15:37:16	54
DoctrineMigrations\\Version20240421190305	2024-04-21 21:03:12	2
\.


--
-- TOC entry 4879 (class 0 OID 16484)
-- Dependencies: 223
-- Data for Name: mark; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.mark (id, student_id, matiere, note, coefficient, nom_controle) FROM stdin;
3	6	SPORT	19	3	BADMINTON
4	7	ART	20	1	PEINTURE
5	7	allemand	0	1	VERBE
6	8	SPORT	20	3	ESCRIME
7	8	ART	6	7	PEINTURE
2	7	mathématiques	17	2	Les limite
\.


--
-- TOC entry 4875 (class 0 OID 16446)
-- Dependencies: 219
-- Data for Name: messenger_messages; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM stdin;
\.


--
-- TOC entry 4873 (class 0 OID 16438)
-- Dependencies: 217
-- Data for Name: student; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.student (id, firstname, lastname, classe) FROM stdin;
6	matthis	phan	terminale
7	capucine	herman	terminale
8	enzo	nibaudeau	terminale
\.


--
-- TOC entry 4877 (class 0 OID 16461)
-- Dependencies: 221
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."user" (id, email, roles, password) FROM stdin;
1	admin@gmail.com	{\n  "roles":"admin"\n}	$2y$13$3hsRvcD5psw170sAx/bNcuOZpt34st29PlEDrt19MJy6ij.SAODtK
\.


--
-- TOC entry 4889 (class 0 OID 0)
-- Dependencies: 222
-- Name: mark_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.mark_id_seq', 8, true);


--
-- TOC entry 4890 (class 0 OID 0)
-- Dependencies: 218
-- Name: messenger_messages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);


--
-- TOC entry 4891 (class 0 OID 0)
-- Dependencies: 216
-- Name: student_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.student_id_seq', 9, true);


--
-- TOC entry 4892 (class 0 OID 0)
-- Dependencies: 220
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.user_id_seq', 1, false);


--
-- TOC entry 4712 (class 2606 OID 16436)
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- TOC entry 4725 (class 2606 OID 16490)
-- Name: mark mark_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mark
    ADD CONSTRAINT mark_pkey PRIMARY KEY (id);


--
-- TOC entry 4719 (class 2606 OID 16454)
-- Name: messenger_messages messenger_messages_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages
    ADD CONSTRAINT messenger_messages_pkey PRIMARY KEY (id);


--
-- TOC entry 4714 (class 2606 OID 16444)
-- Name: student student_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.student
    ADD CONSTRAINT student_pkey PRIMARY KEY (id);


--
-- TOC entry 4722 (class 2606 OID 16467)
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- TOC entry 4723 (class 1259 OID 16491)
-- Name: idx_6674f271cb944f1a; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_6674f271cb944f1a ON public.mark USING btree (student_id);


--
-- TOC entry 4715 (class 1259 OID 16457)
-- Name: idx_75ea56e016ba31db; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e016ba31db ON public.messenger_messages USING btree (delivered_at);


--
-- TOC entry 4716 (class 1259 OID 16456)
-- Name: idx_75ea56e0e3bd61ce; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0e3bd61ce ON public.messenger_messages USING btree (available_at);


--
-- TOC entry 4717 (class 1259 OID 16455)
-- Name: idx_75ea56e0fb7336f0; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0fb7336f0 ON public.messenger_messages USING btree (queue_name);


--
-- TOC entry 4720 (class 1259 OID 16468)
-- Name: uniq_identifier_email; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_identifier_email ON public."user" USING btree (email);


--
-- TOC entry 4727 (class 2620 OID 16459)
-- Name: messenger_messages notify_trigger; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON public.messenger_messages FOR EACH ROW EXECUTE FUNCTION public.notify_messenger_messages();


--
-- TOC entry 4726 (class 2606 OID 16492)
-- Name: mark fk_6674f271cb944f1a; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.mark
    ADD CONSTRAINT fk_6674f271cb944f1a FOREIGN KEY (student_id) REFERENCES public.student(id);


-- Completed on 2024-04-22 21:09:18

--
-- PostgreSQL database dump complete
--

