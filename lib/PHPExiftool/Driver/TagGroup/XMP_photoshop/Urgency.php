<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Urgency extends AbstractTagGroup
{
    protected string $id = 'XMP-photoshop:Urgency';

    protected string $name = 'Urgency';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Urgency',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::photoshop
             * line : 289824
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::photoshop.XMP-photoshop:Urgency',
            'desc' => [
                'en' => 'Urgency',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
