<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OriginalTHMResource extends AbstractTagGroup
{
    protected string $id = 'DNG:OriginalTHMResource';

    protected string $name = 'OriginalTHMResource';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Original THM Resource',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : DNG::OriginalRaw
             * line : 78024
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'DNG::OriginalRaw.DNG:OriginalTHMResource',
            'desc' => [
                'en' => 'Original THM Resource',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
