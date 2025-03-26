<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Rights extends AbstractTagGroup
{
    protected string $id = 'MOBI:Rights';

    protected string $name = 'Rights';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Rights',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Palm::EXTH
             * line : 190730
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Palm::EXTH.MOBI:Rights',
            'desc' => [
                'en' => 'Rights',
            ],
        ],
    ];

    protected int $count = 0;
}
