<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Adobe;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Adobe extends AbstractTagGroup
{
    protected string $id = 'Adobe:Adobe';

    protected string $name = 'Adobe';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Extra
             * line : 120972
             * type : ?
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Extra.Adobe:Adobe',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
