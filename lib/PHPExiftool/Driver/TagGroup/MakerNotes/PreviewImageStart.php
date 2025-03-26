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
class PreviewImageStart extends AbstractTagGroup
{
    protected string $id = 'MakerNotes:PreviewImageStart';

    protected string $name = 'PreviewImageStart';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PreviewImageInfo
             * line : 69432
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Canon::PreviewImageInfo.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 85261
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Casio::Type2.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        2 => [
            /**
             * table_name : Exif::Main
             * line : 112310
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Exif::Main.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::Main
             * line : 182794
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Minolta::Main.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::PreviewIFD
             * line : 205109
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Nikon::PreviewIFD.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        5 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 250398
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::CameraSettings.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        6 => [
            /**
             * table_name : Olympus::Main
             * line : 259101
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::Main.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        7 => [
            /**
             * table_name : Pentax::Main
             * line : 294780
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Pentax::Main.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        8 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 331940
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Ricoh::ImageInfo.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        9 => [
            /**
             * table_name : Samsung::Main
             * line : 334038
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Samsung::Main.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        10 => [
            /**
             * table_name : Sigma::Main
             * line : 337443
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sigma::Main.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        11 => [
            /**
             * table_name : Sigma::Main
             * line : 337482
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sigma::Main.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Ericsson
             * line : 352084
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sony::Ericsson.MakerNotes:PreviewImageStart',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2060;
}
