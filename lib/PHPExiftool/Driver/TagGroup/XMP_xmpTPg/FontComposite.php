<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpTPg;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FontComposite extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpTPg:FontComposite';

    protected string $name = 'FontComposite';

    protected ?string $phpType = 'boolean';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Font Composite',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpTPg
             * line : 292450
             * type : boolean
             * writable : true
             * count :
             * flags : flattened,list
             */
            'id' => 'XMP::xmpTPg.XMP-xmpTPg:FontComposite',
            'desc' => [
                'en' => 'Font Composite',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2112;
}
