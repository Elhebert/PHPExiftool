<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SigmaRaw;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Shadow extends AbstractTagGroup
{
    protected string $id = 'SigmaRaw:Shadow';

    protected string $name = 'Shadow';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Shadow',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : SigmaRaw::HeaderExt
             * line : 237555
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'SigmaRaw::HeaderExt.SigmaRaw:Shadow',
            'desc' => [
                'en' => 'Shadow',
            ],
        ],
    ];

    protected int $count = 0;
}
