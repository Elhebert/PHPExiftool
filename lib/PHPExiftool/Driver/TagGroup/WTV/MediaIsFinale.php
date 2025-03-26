<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\WTV;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MediaIsFinale extends AbstractTagGroup
{
    protected string $id = 'WTV:MediaIsFinale';

    protected string $name = 'MediaIsFinale';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Media Is Finale',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : WTV::Metadata
             * line : 280329
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'WTV::Metadata.WTV:MediaIsFinale',
            'desc' => [
                'en' => 'Media Is Finale',
            ],
        ],
    ];

    protected int $count = 0;
}
