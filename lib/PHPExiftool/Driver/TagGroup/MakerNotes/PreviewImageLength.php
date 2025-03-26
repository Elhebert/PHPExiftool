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
        'en' => 'Preview Image Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::PreviewImageInfo
             * line : 52356
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Canon::PreviewImageInfo.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        1 => [
            /**
             * table_name : Casio::Type2
             * line : 61997
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Casio::Type2.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        2 => [
            /**
             * table_name : Exif::Main
             * line : 82017
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Exif::Main.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        3 => [
            /**
             * table_name : Minolta::Main
             * line : 124305
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Minolta::Main.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        4 => [
            /**
             * table_name : Nikon::PreviewIFD
             * line : 137900
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Nikon::PreviewIFD.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        5 => [
            /**
             * table_name : Olympus::CameraSettings
             * line : 172846
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::CameraSettings.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        6 => [
            /**
             * table_name : Olympus::Main
             * line : 178794
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Olympus::Main.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        7 => [
            /**
             * table_name : Pentax::Main
             * line : 205986
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Pentax::Main.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        8 => [
            /**
             * table_name : QuickTime::Flip
             * line : 218927
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Flip.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        9 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 233211
             * type : int16u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Ricoh::ImageInfo.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        10 => [
            /**
             * table_name : Samsung::Main
             * line : 234157
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Samsung::Main.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        11 => [
            /**
             * table_name : Sigma::Main
             * line : 236117
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sigma::Main.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        12 => [
            /**
             * table_name : Sigma::Main
             * line : 236132
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sigma::Main.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
        13 => [
            /**
             * table_name : Sony::Ericsson
             * line : 245989
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Sony::Ericsson.MakerNotes:PreviewImageLength',
            'desc' => [
                'en' => 'Preview Image Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
