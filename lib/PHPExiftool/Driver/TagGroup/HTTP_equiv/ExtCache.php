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
class ExtCache extends AbstractTagGroup
{
    protected string $id = 'HTTP-equiv:ExtCache';

    protected string $name = 'ExtCache';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Ext Cache',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : HTML::equiv
             * line : 98670
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'HTML::equiv.HTTP-equiv:ExtCache',
            'desc' => [
                'en' => 'Ext Cache',
            ],
        ],
    ];

    protected int $count = 0;
}
