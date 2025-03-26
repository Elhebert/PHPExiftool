<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\HTTP_equiv;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Pragma extends AbstractTagGroup
{
    protected string $id = 'HTTP-equiv:Pragma';

    protected string $name = 'Pragma';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Pragma',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::equiv
             * line : 98688
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::equiv.HTTP-equiv:Pragma',
            'desc' => [
                'en' => 'Pragma',
            ],
        ],
    ];

    protected int $count = 0;
}
