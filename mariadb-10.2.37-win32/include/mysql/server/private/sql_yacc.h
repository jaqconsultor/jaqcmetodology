/* A Bison parser, made by GNU Bison 3.0.2.  */

/* Bison interface for Yacc-like parsers in C

   Copyright (C) 1984, 1989-1990, 2000-2013 Free Software Foundation, Inc.

   This program is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program.  If not, see <http://www.gnu.org/licenses/>.  */

/* As a special exception, you may create a larger work that contains
   part or all of the Bison parser skeleton and distribute that work
   under terms of your choice, so long as that work isn't itself a
   parser generator using the skeleton or a modified version thereof
   as a parser skeleton.  Alternatively, if you modify or redistribute
   the parser skeleton itself, you may (at your option) remove this
   special exception, which will cause the skeleton and the resulting
   Bison output files to be licensed under the GNU General Public
   License without this special exception.

   This special exception was added by the Free Software Foundation in
   version 2.2 of Bison.  */

#ifndef YY_MYSQL_HOME_BUILDBOT_GIT_MKDIST_SQL_SQL_YACC_H_INCLUDED
# define YY_MYSQL_HOME_BUILDBOT_GIT_MKDIST_SQL_SQL_YACC_H_INCLUDED
/* Debug traces.  */
#ifndef YYDEBUG
# define YYDEBUG 0
#endif
#if YYDEBUG
extern int MYSQLdebug;
#endif

/* Token type.  */
#ifndef YYTOKENTYPE
# define YYTOKENTYPE
  enum yytokentype
  {
    ABORT_SYM = 258,
    ACCESSIBLE_SYM = 259,
    ACTION = 260,
    ADD = 261,
    ADMIN_SYM = 262,
    ADDDATE_SYM = 263,
    AFTER_SYM = 264,
    AGAINST = 265,
    AGGREGATE_SYM = 266,
    ALGORITHM_SYM = 267,
    ALL = 268,
    ALTER = 269,
    ALWAYS_SYM = 270,
    ANALYZE_SYM = 271,
    AND_AND_SYM = 272,
    AND_SYM = 273,
    ANY_SYM = 274,
    AS = 275,
    ASC = 276,
    ASCII_SYM = 277,
    ASENSITIVE_SYM = 278,
    AT_SYM = 279,
    ATOMIC_SYM = 280,
    AUTHORS_SYM = 281,
    AUTOEXTEND_SIZE_SYM = 282,
    AUTO_INC = 283,
    AUTO_SYM = 284,
    AVG_ROW_LENGTH = 285,
    AVG_SYM = 286,
    BACKUP_SYM = 287,
    BEFORE_SYM = 288,
    BEGIN_SYM = 289,
    BETWEEN_SYM = 290,
    BIGINT = 291,
    BINARY = 292,
    BINLOG_SYM = 293,
    BIN_NUM = 294,
    BIT_AND = 295,
    BIT_OR = 296,
    BIT_SYM = 297,
    BIT_XOR = 298,
    BLOB_SYM = 299,
    BLOCK_SYM = 300,
    BOOLEAN_SYM = 301,
    BOOL_SYM = 302,
    BOTH = 303,
    BTREE_SYM = 304,
    BY = 305,
    BYTE_SYM = 306,
    CACHE_SYM = 307,
    CALL_SYM = 308,
    CASCADE = 309,
    CASCADED = 310,
    CASE_SYM = 311,
    CAST_SYM = 312,
    CATALOG_NAME_SYM = 313,
    CHAIN_SYM = 314,
    CHANGE = 315,
    CHANGED = 316,
    CHARSET = 317,
    CHAR_SYM = 318,
    CHECKPOINT_SYM = 319,
    CHECKSUM_SYM = 320,
    CHECK_SYM = 321,
    CIPHER_SYM = 322,
    CLASS_ORIGIN_SYM = 323,
    CLIENT_SYM = 324,
    CLOSE_SYM = 325,
    COALESCE = 326,
    CODE_SYM = 327,
    COLLATE_SYM = 328,
    COLLATION_SYM = 329,
    COLUMNS = 330,
    COLUMN_ADD_SYM = 331,
    COLUMN_CHECK_SYM = 332,
    COLUMN_CREATE_SYM = 333,
    COLUMN_DELETE_SYM = 334,
    COLUMN_GET_SYM = 335,
    COLUMN_SYM = 336,
    COLUMN_NAME_SYM = 337,
    COMMENT_SYM = 338,
    COMMITTED_SYM = 339,
    COMMIT_SYM = 340,
    COMPACT_SYM = 341,
    COMPLETION_SYM = 342,
    COMPRESSED_SYM = 343,
    CONCURRENT = 344,
    CONDITION_SYM = 345,
    CONNECTION_SYM = 346,
    CONSISTENT_SYM = 347,
    CONSTRAINT = 348,
    CONSTRAINT_CATALOG_SYM = 349,
    CONSTRAINT_NAME_SYM = 350,
    CONSTRAINT_SCHEMA_SYM = 351,
    CONTAINS_SYM = 352,
    CONTEXT_SYM = 353,
    CONTINUE_SYM = 354,
    CONTRIBUTORS_SYM = 355,
    CONVERT_SYM = 356,
    COUNT_SYM = 357,
    CPU_SYM = 358,
    CREATE = 359,
    CROSS = 360,
    CUBE_SYM = 361,
    CUME_DIST_SYM = 362,
    CURDATE = 363,
    CURRENT_SYM = 364,
    CURRENT_USER = 365,
    CURRENT_ROLE = 366,
    CURRENT_POS_SYM = 367,
    CURSOR_SYM = 368,
    CURSOR_NAME_SYM = 369,
    CURTIME = 370,
    DATABASE = 371,
    DATABASES = 372,
    DATAFILE_SYM = 373,
    DATA_SYM = 374,
    DATETIME = 375,
    DATE_ADD_INTERVAL = 376,
    DATE_SUB_INTERVAL = 377,
    DATE_SYM = 378,
    DAY_HOUR_SYM = 379,
    DAY_MICROSECOND_SYM = 380,
    DAY_MINUTE_SYM = 381,
    DAY_SECOND_SYM = 382,
    DAY_SYM = 383,
    DEALLOCATE_SYM = 384,
    DECIMAL_NUM = 385,
    DECIMAL_SYM = 386,
    DECLARE_SYM = 387,
    DEFAULT = 388,
    DEFINER_SYM = 389,
    DELAYED_SYM = 390,
    DELAY_KEY_WRITE_SYM = 391,
    DELETE_DOMAIN_ID_SYM = 392,
    DELETE_SYM = 393,
    DENSE_RANK_SYM = 394,
    DESC = 395,
    DESCRIBE = 396,
    DES_KEY_FILE = 397,
    DETERMINISTIC_SYM = 398,
    DIAGNOSTICS_SYM = 399,
    DIRECTORY_SYM = 400,
    DISABLE_SYM = 401,
    DISCARD = 402,
    DISK_SYM = 403,
    DISTINCT = 404,
    DIV_SYM = 405,
    DOUBLE_SYM = 406,
    DO_DOMAIN_IDS_SYM = 407,
    DO_SYM = 408,
    DROP = 409,
    DUAL_SYM = 410,
    DUMPFILE = 411,
    DUPLICATE_SYM = 412,
    DYNAMIC_SYM = 413,
    EACH_SYM = 414,
    ELSE = 415,
    ELSEIF_SYM = 416,
    ENABLE_SYM = 417,
    ENCLOSED = 418,
    END = 419,
    ENDS_SYM = 420,
    END_OF_INPUT = 421,
    ENGINES_SYM = 422,
    ENGINE_SYM = 423,
    ENUM = 424,
    EQUAL_SYM = 425,
    ERROR_SYM = 426,
    ERRORS = 427,
    ESCAPED = 428,
    ESCAPE_SYM = 429,
    EVENTS_SYM = 430,
    EVENT_SYM = 431,
    EVERY_SYM = 432,
    EXCHANGE_SYM = 433,
    EXAMINED_SYM = 434,
    EXCLUDE_SYM = 435,
    EXECUTE_SYM = 436,
    EXISTS = 437,
    EXIT_SYM = 438,
    EXPANSION_SYM = 439,
    EXPORT_SYM = 440,
    EXTENDED_SYM = 441,
    EXTENT_SIZE_SYM = 442,
    EXTRACT_SYM = 443,
    FALSE_SYM = 444,
    FAST_SYM = 445,
    FAULTS_SYM = 446,
    FETCH_SYM = 447,
    FILE_SYM = 448,
    FIRST_VALUE_SYM = 449,
    FIRST_SYM = 450,
    FIXED_SYM = 451,
    FLOAT_NUM = 452,
    FLOAT_SYM = 453,
    FLUSH_SYM = 454,
    FOLLOWS_SYM = 455,
    FOLLOWING_SYM = 456,
    FORCE_SYM = 457,
    FOREIGN = 458,
    FOR_SYM = 459,
    FORMAT_SYM = 460,
    FOUND_SYM = 461,
    FROM = 462,
    FULL = 463,
    FULLTEXT_SYM = 464,
    FUNCTION_SYM = 465,
    GE = 466,
    GENERAL = 467,
    GENERATED_SYM = 468,
    GEOMETRYCOLLECTION = 469,
    GEOMETRY_SYM = 470,
    GET_FORMAT = 471,
    GET_SYM = 472,
    GLOBAL_SYM = 473,
    GRANT = 474,
    GRANTS = 475,
    GROUP_SYM = 476,
    GROUP_CONCAT_SYM = 477,
    LAG_SYM = 478,
    LEAD_SYM = 479,
    HANDLER_SYM = 480,
    HARD_SYM = 481,
    HASH_SYM = 482,
    HAVING = 483,
    HELP_SYM = 484,
    HEX_NUM = 485,
    HEX_STRING = 486,
    HIGH_PRIORITY = 487,
    HOST_SYM = 488,
    HOSTS_SYM = 489,
    HOUR_MICROSECOND_SYM = 490,
    HOUR_MINUTE_SYM = 491,
    HOUR_SECOND_SYM = 492,
    HOUR_SYM = 493,
    ID_SYM = 494,
    IDENT = 495,
    IDENTIFIED_SYM = 496,
    IDENT_QUOTED = 497,
    IF_SYM = 498,
    IGNORE_DOMAIN_IDS_SYM = 499,
    IGNORE_SYM = 500,
    IGNORE_SERVER_IDS_SYM = 501,
    IMMEDIATE_SYM = 502,
    IMPORT = 503,
    INDEXES = 504,
    INDEX_SYM = 505,
    INFILE = 506,
    INITIAL_SIZE_SYM = 507,
    INNER_SYM = 508,
    INOUT_SYM = 509,
    INSENSITIVE_SYM = 510,
    INSERT = 511,
    INSERT_METHOD = 512,
    INSTALL_SYM = 513,
    INTERVAL_SYM = 514,
    INTO = 515,
    INT_SYM = 516,
    INVOKER_SYM = 517,
    IN_SYM = 518,
    IO_SYM = 519,
    IPC_SYM = 520,
    IS = 521,
    ISOLATION = 522,
    ISSUER_SYM = 523,
    ITERATE_SYM = 524,
    JOIN_SYM = 525,
    JSON_SYM = 526,
    KEYS = 527,
    KEY_BLOCK_SIZE = 528,
    KEY_SYM = 529,
    KILL_SYM = 530,
    LANGUAGE_SYM = 531,
    LAST_SYM = 532,
    LAST_VALUE = 533,
    LE = 534,
    LEADING = 535,
    LEAVES = 536,
    LEAVE_SYM = 537,
    LEFT = 538,
    LESS_SYM = 539,
    LEVEL_SYM = 540,
    LEX_HOSTNAME = 541,
    LIKE = 542,
    LIMIT = 543,
    LINEAR_SYM = 544,
    LINES = 545,
    LINESTRING = 546,
    LIST_SYM = 547,
    LOAD = 548,
    LOCAL_SYM = 549,
    LOCATOR_SYM = 550,
    LOCKS_SYM = 551,
    LOCK_SYM = 552,
    LOGFILE_SYM = 553,
    LOGS_SYM = 554,
    LONGBLOB = 555,
    LONGTEXT = 556,
    LONG_NUM = 557,
    LONG_SYM = 558,
    LOOP_SYM = 559,
    LOW_PRIORITY = 560,
    MASTER_CONNECT_RETRY_SYM = 561,
    MASTER_DELAY_SYM = 562,
    MASTER_GTID_POS_SYM = 563,
    MASTER_HOST_SYM = 564,
    MASTER_LOG_FILE_SYM = 565,
    MASTER_LOG_POS_SYM = 566,
    MASTER_PASSWORD_SYM = 567,
    MASTER_PORT_SYM = 568,
    MASTER_SERVER_ID_SYM = 569,
    MASTER_SSL_CAPATH_SYM = 570,
    MASTER_SSL_CA_SYM = 571,
    MASTER_SSL_CERT_SYM = 572,
    MASTER_SSL_CIPHER_SYM = 573,
    MASTER_SSL_CRL_SYM = 574,
    MASTER_SSL_CRLPATH_SYM = 575,
    MASTER_SSL_KEY_SYM = 576,
    MASTER_SSL_SYM = 577,
    MASTER_SSL_VERIFY_SERVER_CERT_SYM = 578,
    MASTER_SYM = 579,
    MASTER_USER_SYM = 580,
    MASTER_USE_GTID_SYM = 581,
    MASTER_HEARTBEAT_PERIOD_SYM = 582,
    MATCH = 583,
    MAX_CONNECTIONS_PER_HOUR = 584,
    MAX_QUERIES_PER_HOUR = 585,
    MAX_ROWS = 586,
    MAX_SIZE_SYM = 587,
    MAX_SYM = 588,
    MAX_UPDATES_PER_HOUR = 589,
    MAX_STATEMENT_TIME_SYM = 590,
    MAX_USER_CONNECTIONS_SYM = 591,
    MAX_VALUE_SYM = 592,
    MEDIUMBLOB = 593,
    MEDIUMINT = 594,
    MEDIUMTEXT = 595,
    MEDIUM_SYM = 596,
    MEMORY_SYM = 597,
    MERGE_SYM = 598,
    MESSAGE_TEXT_SYM = 599,
    MICROSECOND_SYM = 600,
    MIGRATE_SYM = 601,
    MINUTE_MICROSECOND_SYM = 602,
    MINUTE_SECOND_SYM = 603,
    MINUTE_SYM = 604,
    MIN_ROWS = 605,
    MIN_SYM = 606,
    MODE_SYM = 607,
    MODIFIES_SYM = 608,
    MODIFY_SYM = 609,
    MOD_SYM = 610,
    MONTH_SYM = 611,
    MULTILINESTRING = 612,
    MULTIPOINT = 613,
    MULTIPOLYGON = 614,
    MUTEX_SYM = 615,
    MYSQL_SYM = 616,
    MYSQL_ERRNO_SYM = 617,
    NAMES_SYM = 618,
    NAME_SYM = 619,
    NATIONAL_SYM = 620,
    NATURAL = 621,
    NCHAR_STRING = 622,
    NCHAR_SYM = 623,
    NE = 624,
    NEG = 625,
    NEW_SYM = 626,
    NEXT_SYM = 627,
    NODEGROUP_SYM = 628,
    NONE_SYM = 629,
    NOT2_SYM = 630,
    NOT_SYM = 631,
    NOW_SYM = 632,
    NO_SYM = 633,
    NO_WAIT_SYM = 634,
    NO_WRITE_TO_BINLOG = 635,
    NTILE_SYM = 636,
    NULL_SYM = 637,
    NUM = 638,
    NUMBER_SYM = 639,
    NUMERIC_SYM = 640,
    NTH_VALUE_SYM = 641,
    NVARCHAR_SYM = 642,
    OFFSET_SYM = 643,
    OLD_PASSWORD_SYM = 644,
    ON = 645,
    ONE_SYM = 646,
    ONLY_SYM = 647,
    ONLINE_SYM = 648,
    OPEN_SYM = 649,
    OPTIMIZE = 650,
    OPTIONS_SYM = 651,
    OPTION = 652,
    OPTIONALLY = 653,
    OR2_SYM = 654,
    ORDER_SYM = 655,
    OR_OR_SYM = 656,
    OR_SYM = 657,
    OTHERS_SYM = 658,
    OUTER = 659,
    OUTFILE = 660,
    OUT_SYM = 661,
    OVER_SYM = 662,
    OWNER_SYM = 663,
    PACK_KEYS_SYM = 664,
    PAGE_SYM = 665,
    PAGE_CHECKSUM_SYM = 666,
    PARAM_MARKER = 667,
    PARSER_SYM = 668,
    PARSE_VCOL_EXPR_SYM = 669,
    PARTIAL = 670,
    PARTITION_SYM = 671,
    PARTITIONS_SYM = 672,
    PARTITIONING_SYM = 673,
    PASSWORD_SYM = 674,
    PERCENT_RANK_SYM = 675,
    PERSISTENT_SYM = 676,
    PHASE_SYM = 677,
    PLUGINS_SYM = 678,
    PLUGIN_SYM = 679,
    POINT_SYM = 680,
    POLYGON = 681,
    PORT_SYM = 682,
    POSITION_SYM = 683,
    PRECEDES_SYM = 684,
    PRECEDING_SYM = 685,
    PRECISION = 686,
    PREPARE_SYM = 687,
    PRESERVE_SYM = 688,
    PREV_SYM = 689,
    PRIMARY_SYM = 690,
    PRIVILEGES = 691,
    PROCEDURE_SYM = 692,
    PROCESS = 693,
    PROCESSLIST_SYM = 694,
    PROFILE_SYM = 695,
    PROFILES_SYM = 696,
    PROXY_SYM = 697,
    PURGE = 698,
    QUARTER_SYM = 699,
    QUERY_SYM = 700,
    QUICK = 701,
    RANGE_SYM = 702,
    RANK_SYM = 703,
    READS_SYM = 704,
    READ_ONLY_SYM = 705,
    READ_SYM = 706,
    READ_WRITE_SYM = 707,
    REAL = 708,
    REBUILD_SYM = 709,
    RECOVER_SYM = 710,
    RECURSIVE_SYM = 711,
    REDOFILE_SYM = 712,
    REDO_BUFFER_SIZE_SYM = 713,
    REDUNDANT_SYM = 714,
    REFERENCES = 715,
    REGEXP = 716,
    RELAY = 717,
    RELAYLOG_SYM = 718,
    RELAY_LOG_FILE_SYM = 719,
    RELAY_LOG_POS_SYM = 720,
    RELAY_THREAD = 721,
    RELEASE_SYM = 722,
    RELOAD = 723,
    REMOVE_SYM = 724,
    RENAME = 725,
    REORGANIZE_SYM = 726,
    REPAIR = 727,
    REPEATABLE_SYM = 728,
    REPEAT_SYM = 729,
    REPLACE = 730,
    REPLICATION = 731,
    REQUIRE_SYM = 732,
    RESET_SYM = 733,
    RESIGNAL_SYM = 734,
    RESOURCES = 735,
    RESTORE_SYM = 736,
    RESTRICT = 737,
    RESUME_SYM = 738,
    RETURNED_SQLSTATE_SYM = 739,
    RETURNING_SYM = 740,
    RETURNS_SYM = 741,
    RETURN_SYM = 742,
    REVERSE_SYM = 743,
    REVOKE = 744,
    RIGHT = 745,
    ROLE_SYM = 746,
    ROLLBACK_SYM = 747,
    ROLLUP_SYM = 748,
    ROUTINE_SYM = 749,
    ROW_SYM = 750,
    ROWS_SYM = 751,
    ROW_COUNT_SYM = 752,
    ROW_FORMAT_SYM = 753,
    ROW_NUMBER_SYM = 754,
    RTREE_SYM = 755,
    SAVEPOINT_SYM = 756,
    SCHEDULE_SYM = 757,
    SCHEMA_NAME_SYM = 758,
    SECOND_MICROSECOND_SYM = 759,
    SECOND_SYM = 760,
    SECURITY_SYM = 761,
    SELECT_SYM = 762,
    SENSITIVE_SYM = 763,
    SEPARATOR_SYM = 764,
    SERIALIZABLE_SYM = 765,
    SERIAL_SYM = 766,
    SESSION_SYM = 767,
    SERVER_SYM = 768,
    SERVER_OPTIONS = 769,
    SET = 770,
    SET_VAR = 771,
    SHARE_SYM = 772,
    SHIFT_LEFT = 773,
    SHIFT_RIGHT = 774,
    SHOW = 775,
    SHUTDOWN = 776,
    SIGNAL_SYM = 777,
    SIGNED_SYM = 778,
    SIMPLE_SYM = 779,
    SLAVE = 780,
    SLAVES = 781,
    SLAVE_POS_SYM = 782,
    SLOW = 783,
    SMALLINT = 784,
    SNAPSHOT_SYM = 785,
    SOCKET_SYM = 786,
    SOFT_SYM = 787,
    SONAME_SYM = 788,
    SOUNDS_SYM = 789,
    SOURCE_SYM = 790,
    SPATIAL_SYM = 791,
    SPECIFIC_SYM = 792,
    SQLEXCEPTION_SYM = 793,
    SQLSTATE_SYM = 794,
    SQLWARNING_SYM = 795,
    SQL_BIG_RESULT = 796,
    SQL_BUFFER_RESULT = 797,
    SQL_CACHE_SYM = 798,
    SQL_CALC_FOUND_ROWS = 799,
    SQL_NO_CACHE_SYM = 800,
    SQL_SMALL_RESULT = 801,
    SQL_SYM = 802,
    SQL_THREAD = 803,
    REF_SYSTEM_ID_SYM = 804,
    SSL_SYM = 805,
    STARTING = 806,
    STARTS_SYM = 807,
    START_SYM = 808,
    STATEMENT_SYM = 809,
    STATS_AUTO_RECALC_SYM = 810,
    STATS_PERSISTENT_SYM = 811,
    STATS_SAMPLE_PAGES_SYM = 812,
    STATUS_SYM = 813,
    STDDEV_SAMP_SYM = 814,
    STD_SYM = 815,
    STOP_SYM = 816,
    STORAGE_SYM = 817,
    STORED_SYM = 818,
    STRAIGHT_JOIN = 819,
    STRING_SYM = 820,
    SUBCLASS_ORIGIN_SYM = 821,
    SUBDATE_SYM = 822,
    SUBJECT_SYM = 823,
    SUBPARTITIONS_SYM = 824,
    SUBPARTITION_SYM = 825,
    SUBSTRING = 826,
    SUM_SYM = 827,
    SUPER_SYM = 828,
    SUSPEND_SYM = 829,
    SWAPS_SYM = 830,
    SWITCHES_SYM = 831,
    SYSDATE = 832,
    TABLES = 833,
    TABLESPACE = 834,
    TABLE_REF_PRIORITY = 835,
    TABLE_SYM = 836,
    TABLE_CHECKSUM_SYM = 837,
    TABLE_NAME_SYM = 838,
    TEMPORARY = 839,
    TEMPTABLE_SYM = 840,
    TERMINATED = 841,
    TEXT_STRING = 842,
    TEXT_SYM = 843,
    THAN_SYM = 844,
    THEN_SYM = 845,
    TIES_SYM = 846,
    TIMESTAMP = 847,
    TIMESTAMP_ADD = 848,
    TIMESTAMP_DIFF = 849,
    TIME_SYM = 850,
    TINYBLOB = 851,
    TINYINT = 852,
    TINYTEXT = 853,
    TO_SYM = 854,
    TRAILING = 855,
    TRANSACTION_SYM = 856,
    TRANSACTIONAL_SYM = 857,
    TRIGGERS_SYM = 858,
    TRIGGER_SYM = 859,
    TRIM = 860,
    TRUE_SYM = 861,
    TRUNCATE_SYM = 862,
    TYPES_SYM = 863,
    TYPE_SYM = 864,
    UDF_RETURNS_SYM = 865,
    ULONGLONG_NUM = 866,
    UNBOUNDED_SYM = 867,
    UNCOMMITTED_SYM = 868,
    UNDEFINED_SYM = 869,
    UNDERSCORE_CHARSET = 870,
    UNDOFILE_SYM = 871,
    UNDO_BUFFER_SIZE_SYM = 872,
    UNDO_SYM = 873,
    UNICODE_SYM = 874,
    UNINSTALL_SYM = 875,
    UNION_SYM = 876,
    UNIQUE_SYM = 877,
    UNKNOWN_SYM = 878,
    UNLOCK_SYM = 879,
    UNSIGNED = 880,
    UNTIL_SYM = 881,
    UPDATE_SYM = 882,
    UPGRADE_SYM = 883,
    USAGE = 884,
    USER_SYM = 885,
    USE_FRM = 886,
    USE_SYM = 887,
    USING = 888,
    UTC_DATE_SYM = 889,
    UTC_TIMESTAMP_SYM = 890,
    UTC_TIME_SYM = 891,
    VALUES = 892,
    VALUE_SYM = 893,
    VARBINARY = 894,
    VARCHAR = 895,
    VARIABLES = 896,
    VARIANCE_SYM = 897,
    VARYING = 898,
    VAR_SAMP_SYM = 899,
    VIA_SYM = 900,
    VIEW_SYM = 901,
    VIRTUAL_SYM = 902,
    WAIT_SYM = 903,
    WARNINGS = 904,
    WEEK_SYM = 905,
    WEIGHT_STRING_SYM = 906,
    WHEN_SYM = 907,
    WHERE = 908,
    WINDOW_SYM = 909,
    WHILE_SYM = 910,
    WITH = 911,
    WITH_CUBE_SYM = 912,
    WITH_ROLLUP_SYM = 913,
    WORK_SYM = 914,
    WRAPPER_SYM = 915,
    WRITE_SYM = 916,
    X509_SYM = 917,
    XA_SYM = 918,
    XML_SYM = 919,
    XOR = 920,
    YEAR_MONTH_SYM = 921,
    YEAR_SYM = 922,
    ZEROFILL = 923,
    IMPOSSIBLE_ACTION = 924,
    CONDITIONLESS_JOIN = 925,
    ON_SYM = 926
  };
#endif
/* Tokens.  */
#define ABORT_SYM 258
#define ACCESSIBLE_SYM 259
#define ACTION 260
#define ADD 261
#define ADMIN_SYM 262
#define ADDDATE_SYM 263
#define AFTER_SYM 264
#define AGAINST 265
#define AGGREGATE_SYM 266
#define ALGORITHM_SYM 267
#define ALL 268
#define ALTER 269
#define ALWAYS_SYM 270
#define ANALYZE_SYM 271
#define AND_AND_SYM 272
#define AND_SYM 273
#define ANY_SYM 274
#define AS 275
#define ASC 276
#define ASCII_SYM 277
#define ASENSITIVE_SYM 278
#define AT_SYM 279
#define ATOMIC_SYM 280
#define AUTHORS_SYM 281
#define AUTOEXTEND_SIZE_SYM 282
#define AUTO_INC 283
#define AUTO_SYM 284
#define AVG_ROW_LENGTH 285
#define AVG_SYM 286
#define BACKUP_SYM 287
#define BEFORE_SYM 288
#define BEGIN_SYM 289
#define BETWEEN_SYM 290
#define BIGINT 291
#define BINARY 292
#define BINLOG_SYM 293
#define BIN_NUM 294
#define BIT_AND 295
#define BIT_OR 296
#define BIT_SYM 297
#define BIT_XOR 298
#define BLOB_SYM 299
#define BLOCK_SYM 300
#define BOOLEAN_SYM 301
#define BOOL_SYM 302
#define BOTH 303
#define BTREE_SYM 304
#define BY 305
#define BYTE_SYM 306
#define CACHE_SYM 307
#define CALL_SYM 308
#define CASCADE 309
#define CASCADED 310
#define CASE_SYM 311
#define CAST_SYM 312
#define CATALOG_NAME_SYM 313
#define CHAIN_SYM 314
#define CHANGE 315
#define CHANGED 316
#define CHARSET 317
#define CHAR_SYM 318
#define CHECKPOINT_SYM 319
#define CHECKSUM_SYM 320
#define CHECK_SYM 321
#define CIPHER_SYM 322
#define CLASS_ORIGIN_SYM 323
#define CLIENT_SYM 324
#define CLOSE_SYM 325
#define COALESCE 326
#define CODE_SYM 327
#define COLLATE_SYM 328
#define COLLATION_SYM 329
#define COLUMNS 330
#define COLUMN_ADD_SYM 331
#define COLUMN_CHECK_SYM 332
#define COLUMN_CREATE_SYM 333
#define COLUMN_DELETE_SYM 334
#define COLUMN_GET_SYM 335
#define COLUMN_SYM 336
#define COLUMN_NAME_SYM 337
#define COMMENT_SYM 338
#define COMMITTED_SYM 339
#define COMMIT_SYM 340
#define COMPACT_SYM 341
#define COMPLETION_SYM 342
#define COMPRESSED_SYM 343
#define CONCURRENT 344
#define CONDITION_SYM 345
#define CONNECTION_SYM 346
#define CONSISTENT_SYM 347
#define CONSTRAINT 348
#define CONSTRAINT_CATALOG_SYM 349
#define CONSTRAINT_NAME_SYM 350
#define CONSTRAINT_SCHEMA_SYM 351
#define CONTAINS_SYM 352
#define CONTEXT_SYM 353
#define CONTINUE_SYM 354
#define CONTRIBUTORS_SYM 355
#define CONVERT_SYM 356
#define COUNT_SYM 357
#define CPU_SYM 358
#define CREATE 359
#define CROSS 360
#define CUBE_SYM 361
#define CUME_DIST_SYM 362
#define CURDATE 363
#define CURRENT_SYM 364
#define CURRENT_USER 365
#define CURRENT_ROLE 366
#define CURRENT_POS_SYM 367
#define CURSOR_SYM 368
#define CURSOR_NAME_SYM 369
#define CURTIME 370
#define DATABASE 371
#define DATABASES 372
#define DATAFILE_SYM 373
#define DATA_SYM 374
#define DATETIME 375
#define DATE_ADD_INTERVAL 376
#define DATE_SUB_INTERVAL 377
#define DATE_SYM 378
#define DAY_HOUR_SYM 379
#define DAY_MICROSECOND_SYM 380
#define DAY_MINUTE_SYM 381
#define DAY_SECOND_SYM 382
#define DAY_SYM 383
#define DEALLOCATE_SYM 384
#define DECIMAL_NUM 385
#define DECIMAL_SYM 386
#define DECLARE_SYM 387
#define DEFAULT 388
#define DEFINER_SYM 389
#define DELAYED_SYM 390
#define DELAY_KEY_WRITE_SYM 391
#define DELETE_DOMAIN_ID_SYM 392
#define DELETE_SYM 393
#define DENSE_RANK_SYM 394
#define DESC 395
#define DESCRIBE 396
#define DES_KEY_FILE 397
#define DETERMINISTIC_SYM 398
#define DIAGNOSTICS_SYM 399
#define DIRECTORY_SYM 400
#define DISABLE_SYM 401
#define DISCARD 402
#define DISK_SYM 403
#define DISTINCT 404
#define DIV_SYM 405
#define DOUBLE_SYM 406
#define DO_DOMAIN_IDS_SYM 407
#define DO_SYM 408
#define DROP 409
#define DUAL_SYM 410
#define DUMPFILE 411
#define DUPLICATE_SYM 412
#define DYNAMIC_SYM 413
#define EACH_SYM 414
#define ELSE 415
#define ELSEIF_SYM 416
#define ENABLE_SYM 417
#define ENCLOSED 418
#define END 419
#define ENDS_SYM 420
#define END_OF_INPUT 421
#define ENGINES_SYM 422
#define ENGINE_SYM 423
#define ENUM 424
#define EQUAL_SYM 425
#define ERROR_SYM 426
#define ERRORS 427
#define ESCAPED 428
#define ESCAPE_SYM 429
#define EVENTS_SYM 430
#define EVENT_SYM 431
#define EVERY_SYM 432
#define EXCHANGE_SYM 433
#define EXAMINED_SYM 434
#define EXCLUDE_SYM 435
#define EXECUTE_SYM 436
#define EXISTS 437
#define EXIT_SYM 438
#define EXPANSION_SYM 439
#define EXPORT_SYM 440
#define EXTENDED_SYM 441
#define EXTENT_SIZE_SYM 442
#define EXTRACT_SYM 443
#define FALSE_SYM 444
#define FAST_SYM 445
#define FAULTS_SYM 446
#define FETCH_SYM 447
#define FILE_SYM 448
#define FIRST_VALUE_SYM 449
#define FIRST_SYM 450
#define FIXED_SYM 451
#define FLOAT_NUM 452
#define FLOAT_SYM 453
#define FLUSH_SYM 454
#define FOLLOWS_SYM 455
#define FOLLOWING_SYM 456
#define FORCE_SYM 457
#define FOREIGN 458
#define FOR_SYM 459
#define FORMAT_SYM 460
#define FOUND_SYM 461
#define FROM 462
#define FULL 463
#define FULLTEXT_SYM 464
#define FUNCTION_SYM 465
#define GE 466
#define GENERAL 467
#define GENERATED_SYM 468
#define GEOMETRYCOLLECTION 469
#define GEOMETRY_SYM 470
#define GET_FORMAT 471
#define GET_SYM 472
#define GLOBAL_SYM 473
#define GRANT 474
#define GRANTS 475
#define GROUP_SYM 476
#define GROUP_CONCAT_SYM 477
#define LAG_SYM 478
#define LEAD_SYM 479
#define HANDLER_SYM 480
#define HARD_SYM 481
#define HASH_SYM 482
#define HAVING 483
#define HELP_SYM 484
#define HEX_NUM 485
#define HEX_STRING 486
#define HIGH_PRIORITY 487
#define HOST_SYM 488
#define HOSTS_SYM 489
#define HOUR_MICROSECOND_SYM 490
#define HOUR_MINUTE_SYM 491
#define HOUR_SECOND_SYM 492
#define HOUR_SYM 493
#define ID_SYM 494
#define IDENT 495
#define IDENTIFIED_SYM 496
#define IDENT_QUOTED 497
#define IF_SYM 498
#define IGNORE_DOMAIN_IDS_SYM 499
#define IGNORE_SYM 500
#define IGNORE_SERVER_IDS_SYM 501
#define IMMEDIATE_SYM 502
#define IMPORT 503
#define INDEXES 504
#define INDEX_SYM 505
#define INFILE 506
#define INITIAL_SIZE_SYM 507
#define INNER_SYM 508
#define INOUT_SYM 509
#define INSENSITIVE_SYM 510
#define INSERT 511
#define INSERT_METHOD 512
#define INSTALL_SYM 513
#define INTERVAL_SYM 514
#define INTO 515
#define INT_SYM 516
#define INVOKER_SYM 517
#define IN_SYM 518
#define IO_SYM 519
#define IPC_SYM 520
#define IS 521
#define ISOLATION 522
#define ISSUER_SYM 523
#define ITERATE_SYM 524
#define JOIN_SYM 525
#define JSON_SYM 526
#define KEYS 527
#define KEY_BLOCK_SIZE 528
#define KEY_SYM 529
#define KILL_SYM 530
#define LANGUAGE_SYM 531
#define LAST_SYM 532
#define LAST_VALUE 533
#define LE 534
#define LEADING 535
#define LEAVES 536
#define LEAVE_SYM 537
#define LEFT 538
#define LESS_SYM 539
#define LEVEL_SYM 540
#define LEX_HOSTNAME 541
#define LIKE 542
#define LIMIT 543
#define LINEAR_SYM 544
#define LINES 545
#define LINESTRING 546
#define LIST_SYM 547
#define LOAD 548
#define LOCAL_SYM 549
#define LOCATOR_SYM 550
#define LOCKS_SYM 551
#define LOCK_SYM 552
#define LOGFILE_SYM 553
#define LOGS_SYM 554
#define LONGBLOB 555
#define LONGTEXT 556
#define LONG_NUM 557
#define LONG_SYM 558
#define LOOP_SYM 559
#define LOW_PRIORITY 560
#define MASTER_CONNECT_RETRY_SYM 561
#define MASTER_DELAY_SYM 562
#define MASTER_GTID_POS_SYM 563
#define MASTER_HOST_SYM 564
#define MASTER_LOG_FILE_SYM 565
#define MASTER_LOG_POS_SYM 566
#define MASTER_PASSWORD_SYM 567
#define MASTER_PORT_SYM 568
#define MASTER_SERVER_ID_SYM 569
#define MASTER_SSL_CAPATH_SYM 570
#define MASTER_SSL_CA_SYM 571
#define MASTER_SSL_CERT_SYM 572
#define MASTER_SSL_CIPHER_SYM 573
#define MASTER_SSL_CRL_SYM 574
#define MASTER_SSL_CRLPATH_SYM 575
#define MASTER_SSL_KEY_SYM 576
#define MASTER_SSL_SYM 577
#define MASTER_SSL_VERIFY_SERVER_CERT_SYM 578
#define MASTER_SYM 579
#define MASTER_USER_SYM 580
#define MASTER_USE_GTID_SYM 581
#define MASTER_HEARTBEAT_PERIOD_SYM 582
#define MATCH 583
#define MAX_CONNECTIONS_PER_HOUR 584
#define MAX_QUERIES_PER_HOUR 585
#define MAX_ROWS 586
#define MAX_SIZE_SYM 587
#define MAX_SYM 588
#define MAX_UPDATES_PER_HOUR 589
#define MAX_STATEMENT_TIME_SYM 590
#define MAX_USER_CONNECTIONS_SYM 591
#define MAX_VALUE_SYM 592
#define MEDIUMBLOB 593
#define MEDIUMINT 594
#define MEDIUMTEXT 595
#define MEDIUM_SYM 596
#define MEMORY_SYM 597
#define MERGE_SYM 598
#define MESSAGE_TEXT_SYM 599
#define MICROSECOND_SYM 600
#define MIGRATE_SYM 601
#define MINUTE_MICROSECOND_SYM 602
#define MINUTE_SECOND_SYM 603
#define MINUTE_SYM 604
#define MIN_ROWS 605
#define MIN_SYM 606
#define MODE_SYM 607
#define MODIFIES_SYM 608
#define MODIFY_SYM 609
#define MOD_SYM 610
#define MONTH_SYM 611
#define MULTILINESTRING 612
#define MULTIPOINT 613
#define MULTIPOLYGON 614
#define MUTEX_SYM 615
#define MYSQL_SYM 616
#define MYSQL_ERRNO_SYM 617
#define NAMES_SYM 618
#define NAME_SYM 619
#define NATIONAL_SYM 620
#define NATURAL 621
#define NCHAR_STRING 622
#define NCHAR_SYM 623
#define NE 624
#define NEG 625
#define NEW_SYM 626
#define NEXT_SYM 627
#define NODEGROUP_SYM 628
#define NONE_SYM 629
#define NOT2_SYM 630
#define NOT_SYM 631
#define NOW_SYM 632
#define NO_SYM 633
#define NO_WAIT_SYM 634
#define NO_WRITE_TO_BINLOG 635
#define NTILE_SYM 636
#define NULL_SYM 637
#define NUM 638
#define NUMBER_SYM 639
#define NUMERIC_SYM 640
#define NTH_VALUE_SYM 641
#define NVARCHAR_SYM 642
#define OFFSET_SYM 643
#define OLD_PASSWORD_SYM 644
#define ON 645
#define ONE_SYM 646
#define ONLY_SYM 647
#define ONLINE_SYM 648
#define OPEN_SYM 649
#define OPTIMIZE 650
#define OPTIONS_SYM 651
#define OPTION 652
#define OPTIONALLY 653
#define OR2_SYM 654
#define ORDER_SYM 655
#define OR_OR_SYM 656
#define OR_SYM 657
#define OTHERS_SYM 658
#define OUTER 659
#define OUTFILE 660
#define OUT_SYM 661
#define OVER_SYM 662
#define OWNER_SYM 663
#define PACK_KEYS_SYM 664
#define PAGE_SYM 665
#define PAGE_CHECKSUM_SYM 666
#define PARAM_MARKER 667
#define PARSER_SYM 668
#define PARSE_VCOL_EXPR_SYM 669
#define PARTIAL 670
#define PARTITION_SYM 671
#define PARTITIONS_SYM 672
#define PARTITIONING_SYM 673
#define PASSWORD_SYM 674
#define PERCENT_RANK_SYM 675
#define PERSISTENT_SYM 676
#define PHASE_SYM 677
#define PLUGINS_SYM 678
#define PLUGIN_SYM 679
#define POINT_SYM 680
#define POLYGON 681
#define PORT_SYM 682
#define POSITION_SYM 683
#define PRECEDES_SYM 684
#define PRECEDING_SYM 685
#define PRECISION 686
#define PREPARE_SYM 687
#define PRESERVE_SYM 688
#define PREV_SYM 689
#define PRIMARY_SYM 690
#define PRIVILEGES 691
#define PROCEDURE_SYM 692
#define PROCESS 693
#define PROCESSLIST_SYM 694
#define PROFILE_SYM 695
#define PROFILES_SYM 696
#define PROXY_SYM 697
#define PURGE 698
#define QUARTER_SYM 699
#define QUERY_SYM 700
#define QUICK 701
#define RANGE_SYM 702
#define RANK_SYM 703
#define READS_SYM 704
#define READ_ONLY_SYM 705
#define READ_SYM 706
#define READ_WRITE_SYM 707
#define REAL 708
#define REBUILD_SYM 709
#define RECOVER_SYM 710
#define RECURSIVE_SYM 711
#define REDOFILE_SYM 712
#define REDO_BUFFER_SIZE_SYM 713
#define REDUNDANT_SYM 714
#define REFERENCES 715
#define REGEXP 716
#define RELAY 717
#define RELAYLOG_SYM 718
#define RELAY_LOG_FILE_SYM 719
#define RELAY_LOG_POS_SYM 720
#define RELAY_THREAD 721
#define RELEASE_SYM 722
#define RELOAD 723
#define REMOVE_SYM 724
#define RENAME 725
#define REORGANIZE_SYM 726
#define REPAIR 727
#define REPEATABLE_SYM 728
#define REPEAT_SYM 729
#define REPLACE 730
#define REPLICATION 731
#define REQUIRE_SYM 732
#define RESET_SYM 733
#define RESIGNAL_SYM 734
#define RESOURCES 735
#define RESTORE_SYM 736
#define RESTRICT 737
#define RESUME_SYM 738
#define RETURNED_SQLSTATE_SYM 739
#define RETURNING_SYM 740
#define RETURNS_SYM 741
#define RETURN_SYM 742
#define REVERSE_SYM 743
#define REVOKE 744
#define RIGHT 745
#define ROLE_SYM 746
#define ROLLBACK_SYM 747
#define ROLLUP_SYM 748
#define ROUTINE_SYM 749
#define ROW_SYM 750
#define ROWS_SYM 751
#define ROW_COUNT_SYM 752
#define ROW_FORMAT_SYM 753
#define ROW_NUMBER_SYM 754
#define RTREE_SYM 755
#define SAVEPOINT_SYM 756
#define SCHEDULE_SYM 757
#define SCHEMA_NAME_SYM 758
#define SECOND_MICROSECOND_SYM 759
#define SECOND_SYM 760
#define SECURITY_SYM 761
#define SELECT_SYM 762
#define SENSITIVE_SYM 763
#define SEPARATOR_SYM 764
#define SERIALIZABLE_SYM 765
#define SERIAL_SYM 766
#define SESSION_SYM 767
#define SERVER_SYM 768
#define SERVER_OPTIONS 769
#define SET 770
#define SET_VAR 771
#define SHARE_SYM 772
#define SHIFT_LEFT 773
#define SHIFT_RIGHT 774
#define SHOW 775
#define SHUTDOWN 776
#define SIGNAL_SYM 777
#define SIGNED_SYM 778
#define SIMPLE_SYM 779
#define SLAVE 780
#define SLAVES 781
#define SLAVE_POS_SYM 782
#define SLOW 783
#define SMALLINT 784
#define SNAPSHOT_SYM 785
#define SOCKET_SYM 786
#define SOFT_SYM 787
#define SONAME_SYM 788
#define SOUNDS_SYM 789
#define SOURCE_SYM 790
#define SPATIAL_SYM 791
#define SPECIFIC_SYM 792
#define SQLEXCEPTION_SYM 793
#define SQLSTATE_SYM 794
#define SQLWARNING_SYM 795
#define SQL_BIG_RESULT 796
#define SQL_BUFFER_RESULT 797
#define SQL_CACHE_SYM 798
#define SQL_CALC_FOUND_ROWS 799
#define SQL_NO_CACHE_SYM 800
#define SQL_SMALL_RESULT 801
#define SQL_SYM 802
#define SQL_THREAD 803
#define REF_SYSTEM_ID_SYM 804
#define SSL_SYM 805
#define STARTING 806
#define STARTS_SYM 807
#define START_SYM 808
#define STATEMENT_SYM 809
#define STATS_AUTO_RECALC_SYM 810
#define STATS_PERSISTENT_SYM 811
#define STATS_SAMPLE_PAGES_SYM 812
#define STATUS_SYM 813
#define STDDEV_SAMP_SYM 814
#define STD_SYM 815
#define STOP_SYM 816
#define STORAGE_SYM 817
#define STORED_SYM 818
#define STRAIGHT_JOIN 819
#define STRING_SYM 820
#define SUBCLASS_ORIGIN_SYM 821
#define SUBDATE_SYM 822
#define SUBJECT_SYM 823
#define SUBPARTITIONS_SYM 824
#define SUBPARTITION_SYM 825
#define SUBSTRING 826
#define SUM_SYM 827
#define SUPER_SYM 828
#define SUSPEND_SYM 829
#define SWAPS_SYM 830
#define SWITCHES_SYM 831
#define SYSDATE 832
#define TABLES 833
#define TABLESPACE 834
#define TABLE_REF_PRIORITY 835
#define TABLE_SYM 836
#define TABLE_CHECKSUM_SYM 837
#define TABLE_NAME_SYM 838
#define TEMPORARY 839
#define TEMPTABLE_SYM 840
#define TERMINATED 841
#define TEXT_STRING 842
#define TEXT_SYM 843
#define THAN_SYM 844
#define THEN_SYM 845
#define TIES_SYM 846
#define TIMESTAMP 847
#define TIMESTAMP_ADD 848
#define TIMESTAMP_DIFF 849
#define TIME_SYM 850
#define TINYBLOB 851
#define TINYINT 852
#define TINYTEXT 853
#define TO_SYM 854
#define TRAILING 855
#define TRANSACTION_SYM 856
#define TRANSACTIONAL_SYM 857
#define TRIGGERS_SYM 858
#define TRIGGER_SYM 859
#define TRIM 860
#define TRUE_SYM 861
#define TRUNCATE_SYM 862
#define TYPES_SYM 863
#define TYPE_SYM 864
#define UDF_RETURNS_SYM 865
#define ULONGLONG_NUM 866
#define UNBOUNDED_SYM 867
#define UNCOMMITTED_SYM 868
#define UNDEFINED_SYM 869
#define UNDERSCORE_CHARSET 870
#define UNDOFILE_SYM 871
#define UNDO_BUFFER_SIZE_SYM 872
#define UNDO_SYM 873
#define UNICODE_SYM 874
#define UNINSTALL_SYM 875
#define UNION_SYM 876
#define UNIQUE_SYM 877
#define UNKNOWN_SYM 878
#define UNLOCK_SYM 879
#define UNSIGNED 880
#define UNTIL_SYM 881
#define UPDATE_SYM 882
#define UPGRADE_SYM 883
#define USAGE 884
#define USER_SYM 885
#define USE_FRM 886
#define USE_SYM 887
#define USING 888
#define UTC_DATE_SYM 889
#define UTC_TIMESTAMP_SYM 890
#define UTC_TIME_SYM 891
#define VALUES 892
#define VALUE_SYM 893
#define VARBINARY 894
#define VARCHAR 895
#define VARIABLES 896
#define VARIANCE_SYM 897
#define VARYING 898
#define VAR_SAMP_SYM 899
#define VIA_SYM 900
#define VIEW_SYM 901
#define VIRTUAL_SYM 902
#define WAIT_SYM 903
#define WARNINGS 904
#define WEEK_SYM 905
#define WEIGHT_STRING_SYM 906
#define WHEN_SYM 907
#define WHERE 908
#define WINDOW_SYM 909
#define WHILE_SYM 910
#define WITH 911
#define WITH_CUBE_SYM 912
#define WITH_ROLLUP_SYM 913
#define WORK_SYM 914
#define WRAPPER_SYM 915
#define WRITE_SYM 916
#define X509_SYM 917
#define XA_SYM 918
#define XML_SYM 919
#define XOR 920
#define YEAR_MONTH_SYM 921
#define YEAR_SYM 922
#define ZEROFILL 923
#define IMPOSSIBLE_ACTION 924
#define CONDITIONLESS_JOIN 925
#define ON_SYM 926

/* Value type.  */
#if ! defined YYSTYPE && ! defined YYSTYPE_IS_DECLARED
typedef union YYSTYPE YYSTYPE;
union YYSTYPE
{
#line 936 "/home/buildbot/git/sql/sql_yacc.yy" /* yacc.c:1909  */

  int  num;
  ulong ulong_num;
  ulonglong ulonglong_number;
  longlong longlong_number;

  /* structs */
  LEX_STRING lex_str;
  LEX_SYMBOL symbol;
  struct sys_var_with_base variable;
  struct { int vars, conds, hndlrs, curs; } spblock;
  Lex_length_and_dec_st Lex_length_and_dec;
  Lex_cast_type_st Lex_cast_type;
  Lex_field_type_st Lex_field_type;
  Lex_dyncol_type_st Lex_dyncol_type;

  /* pointers */
  Create_field *create_field;
  CHARSET_INFO *charset;
  Condition_information_item *cond_info_item;
  DYNCALL_CREATE_DEF *dyncol_def;
  Diagnostics_information *diag_info;
  Item *item;
  Item_num *item_num;
  Item_param *item_param;
  Key_part_spec *key_part;
  LEX *lex;
  LEX_STRING *lex_str_ptr;
  LEX_USER *lex_user;
  List<Condition_information_item> *cond_info_list;
  List<DYNCALL_CREATE_DEF> *dyncol_def_list;
  List<Item> *item_list;
  List<Statement_information_item> *stmt_info_list;
  List<String> *string_list;
  List<LEX_STRING> *lex_str_list;
  Statement_information_item *stmt_info_item;
  String *string;
  TABLE_LIST *table_list;
  Table_ident *table;
  char *simple_string;
  const char *const_simple_string;
  chooser_compare_func_creator boolfunc2creator;
  class my_var *myvar;
  class sp_condition_value *spcondvalue;
  class sp_head *sphead;
  class sp_label *splabel;
  class sp_name *spname;
  class sp_variable *spvar;
  class With_clause *with_clause;
  class Virtual_column_info *virtual_column;

  handlerton *db_type;
  st_select_lex *select_lex;
  struct p_elem_val *p_elem_value;
  class Window_frame *window_frame;
  class Window_frame_bound *window_frame_bound;
  udf_func *udf;
  st_trg_execution_order trg_execution_order;

  /* enums */
  enum Condition_information_item::Name cond_info_item_name;
  enum enum_diag_condition_item_name diag_condition_item_name;
  enum Diagnostics_information::Which_area diag_area;
  enum Field::geometry_type geom_type;
  enum enum_fk_option m_fk_option;
  enum Item_udftype udf_type;
  enum Key::Keytype key_type;
  enum Statement_information_item::Name stmt_info_item_name;
  enum enum_field_types field_type;
  enum enum_filetype filetype;
  enum enum_tx_isolation tx_isolation;
  enum enum_var_type var_type;
  enum enum_yes_no_unknown m_yes_no_unk;
  enum ha_choice choice;
  enum ha_key_alg key_alg;
  enum ha_rkey_function ha_rkey_mode;
  enum index_hint_type index_hint;
  enum interval_type interval, interval_time_st;
  enum row_type row_type;
  enum sp_variable::enum_mode spvar_mode;
  enum thr_lock_type lock_type;
  enum enum_mysql_timestamp_type date_time_type;
  enum Window_frame_bound::Bound_precedence_type bound_precedence_type;
  enum Window_frame::Frame_units frame_units;
  enum Window_frame::Frame_exclusion frame_exclusion;
  enum trigger_order_type trigger_action_order_type;
  DDL_options_st object_ddl_options;

#line 1485 "/home/buildbot/git/mkdist/sql/sql_yacc.h" /* yacc.c:1909  */
};
# define YYSTYPE_IS_TRIVIAL 1
# define YYSTYPE_IS_DECLARED 1
#endif



int MYSQLparse (THD *thd);

#endif /* !YY_MYSQL_HOME_BUILDBOT_GIT_MKDIST_SQL_SQL_YACC_H_INCLUDED  */