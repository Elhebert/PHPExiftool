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
class Subtitle extends AbstractTagGroup
{
    protected string $id = 'WTV:Subtitle';

    protected string $name = 'Subtitle';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Subtitle',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : WTV::Metadata
             * line : 280508
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'WTV::Metadata.WTV:Subtitle',
            'desc' => [
                'en' => 'Subtitle',
            ],
        ],
    ];

    protected int $count = 0;
}
