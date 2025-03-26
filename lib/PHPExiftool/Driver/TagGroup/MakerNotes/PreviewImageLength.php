<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MakerNotes;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageLength extends AbstractTagGroup
{
    protected string $id = 'MakerNotes:PreviewImageLength';

    protected string $name = 'PreviewImageLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PreviewImageInfo
             * line : 69411
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Canon::PreviewImageInfo.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 85250
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Casio::Type2.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Exif::Main
             * line : 112383
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Exif::Main.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::Main
             * line : 182805
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Minolta::Main.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::PreviewIFD
             * line : 205120
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Nikon::PreviewIFD.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 250409
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::CameraSettings.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Olympus::Main
             * line : 259112
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::Main.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Pentax::Main
             * line : 294769
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Pentax::Main.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : QuickTime::Flip
             * line : 313064
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Flip.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 331951
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Ricoh::ImageInfo.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Samsung::Main
             * line : 334049
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Samsung::Main.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sigma::Main
             * line : 337457
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sigma::Main.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Sigma::Main
             * line : 337504
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sigma::Main.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Ericsson
             * line : 352095
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sony::Ericsson.MakerNotes:PreviewImageLength',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
