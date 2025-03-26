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
        'en' => 'Preview Image Start',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PreviewImageInfo
             * line : 52365
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Canon::PreviewImageInfo.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 62000
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Casio::Type2.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        2 => [
            /**
             * table_name : Exif::Main
             * line : 81987
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Exif::Main.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::Main
             * line : 124302
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Minolta::Main.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::PreviewIFD
             * line : 137897
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Nikon::PreviewIFD.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        5 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 172843
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::CameraSettings.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        6 => [
            /**
             * table_name : Olympus::Main
             * line : 178791
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::Main.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        7 => [
            /**
             * table_name : Pentax::Main
             * line : 205989
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Pentax::Main.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        8 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 233208
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Ricoh::ImageInfo.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        9 => [
            /**
             * table_name : Samsung::Main
             * line : 234154
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Samsung::Main.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        10 => [
            /**
             * table_name : Sigma::Main
             * line : 236111
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sigma::Main.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        11 => [
            /**
             * table_name : Sigma::Main
             * line : 236126
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sigma::Main.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
        12 => [
            /**
             * table_name : Sony::Ericsson
             * line : 245986
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sony::Ericsson.MakerNotes:PreviewImageStart',
            'desc' => [
                'en' => 'Preview Image Start',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2060;
}
