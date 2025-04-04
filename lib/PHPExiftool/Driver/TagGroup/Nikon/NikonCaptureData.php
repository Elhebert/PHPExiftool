<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class NikonCaptureData extends AbstractTagGroup
{
    protected string $id = 'Nikon:NikonCaptureData';

    protected string $name = 'NikonCaptureData';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Nikon Capture Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Nikon::Main
             * line : 134632
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Nikon::Main.Nikon:NikonCaptureData',
            'desc' => [
                'en' => 'Nikon Capture Data',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
